<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class forms extends CI_Controller{

	private $mckey = '';
	private $mcList = '';

	function __construct(){
		parent::__construct();
		$this->check_isvalidated();

		$this->load->model('SettingsModel');
		$this->mckey = $this->SettingsModel->GetMailchimpApi();
		$this->mcList = $this->SettingsModel->GetMailchimpList();
		$this->mdkey = $this->SettingsModel->GetMD();

		$config = array(
		    	'apikey' => $this->mckey,      // Insert your api key
	        'secure' => FALSE   // Optional (defaults to FALSE)
			);
			$this->load->library('MCAPI', $config, 'mail_chimp');
	}
	public function index(){
		$data = '';
		$data['heading'] = 'Forms';

		if(isset($_REQUEST['msg'])){
			if($_REQUEST['msg'] == 1){
				$data['msg'] = '1';
			}else{
				$data['msg'] = '2';
			}	
		}
		
		$data['action'] = base_url('index.php/forms/FinalAssessment');
		$this->load->view('common/header',$data);
		$this->load->view('common/nav',$data);
		$this->load->view('forms/form_main_view',$data);
		$this->load->view('common/footer',$data);
	}

	public function FinalAssessment(){
		$this->load->helper('url');
		$type = $this->input->post('template');
		$email = $this->input->post('email');
		$name = $this->input->post('name');
		$last = $name;
		$from_email = "shanijahania@gmail.com";

		$AddMergs = array('date' => 'DATE', 'time' => 'TIME');
		$ListMergs = array();
		$Mergs = $this->mail_chimp->listMergeVars($this->mcList);
		$i = 0;
		foreach ($Mergs as $merg) {
			$ListMergs[$merg['name']] = $merg['tag'];
		}

		foreach ($AddMergs as $key => $value) {
			if(!in_array($value, $ListMergs)){
				$result = $this->mail_chimp->listMergeVarAdd($this->mcList, $value, $key);
			}
		}

		if($type == 'final'){

			$template = FINAL_ASSESSMENT;

			$date = $this->input->post('date');
			$time = $this->input->post('time');
			
			$template_content1 = Array("name" => "content_date", "content" => $date);
			$template_content2 = Array("name" => "content_time", "content" => $time);

			$data["template_content"][] = $template_content1;
			$data["template_content"][] = $template_content2;
			$data["message"]["subject"] = "Final Assessment";
			$merge_vars = array('FNAME'=>$name, 'LNAME'=>$last, 'DATE' => $date, 'TIME' => $time);

		}elseif($type == 'feedback'){

			$template = FEEDBACK;
			$data["message"]["subject"] = "Feedback";
			$merge_vars = array('FNAME'=>$name, 'LNAME'=>$last);

		}elseif($type == 'nutrition'){

			$Recency = $this->input->post('Recency');
			$Grams = $this->input->post('protein');
			$Supplements = $this->input->post('supplements');
			$Recommend = $this->input->post('recommend');

			$template_content1 = Array("name" => "content_recency", "content" => $Recency);
			$template_content2 = Array("name" => "content_goal", "content" => $Grams);
			$template_content3 = Array("name" => "content_time", "content" => $Supplements);
			$template_content4 = Array("name" => "content_recommended", "content" => $Recommend);

			$data["template_content"][] = $template_content1;
			$data["template_content"][] = $template_content2;
			$data["template_content"][] = $template_content4;
			$template = NUTRITION;
			$data["message"]["subject"] = "Post Nutrition";
			$merge_vars = array('FNAME'=>$name, 'LNAME'=>$last);

		}elseif($type == 'assessment'){

			$date = $this->input->post('date');
			$time = $this->input->post('time');
			
			$template_content1 = Array("name" => "content_date", "content" => $date);
			$template_content2 = Array("name" => "content_time", "content" => $time);

			$data["template_content"][] = $template_content1;
			$data["template_content"][] = $template_content2;
			$template = WELCOME_ASSESSMENT;
			$data["message"]["subject"] = "Welcome Assessment";

			$merge_vars = array('FNAME'=>$name, 'LNAME'=>$last, 'DATE' => $date, 'TIME' => $time);

		}elseif($type == 'welcome'){

			$template = WELCOME_EMAIL;
			$data["message"]["subject"] = "Welcome";
			$merge_vars = array('FNAME'=>$name, 'LNAME'=>$last);

		}else{
			echo "No template..";
		}

		$retval = $this->mail_chimp->listSubscribe( $this->mcList, $email, $merge_vars, 'html', false, true);
		// if ($this->mail_chimp->errorCode){

		// 	echo "Unable to load listSubscribe()!\n";
		// 	echo "\tCode=".$this->mail_chimp->errorCode."\n";
		// 	echo "\tMsg=".$this->mail_chimp->errorMessage."\n";

		// } else {

		// 	echo "Subscribed - look for the confirmation email!\n";

		// }

		$arr_to = array();	
		$arr_to[] = Array("email" => $email, "name" => $name);

		$template_content0 = Array("name" => "content_name", "content" => $name);
		$data["template_content"][] = $template_content0;

		$data["key"] = $this->mdkey;
		$data["template_name"] = $template;
		$data["message"]["html"] = "<p>Lorem iposum</p>";
		$data["message"]["text"] = "Lorem iposum";
		$data["message"]["from_email"] = $from_email;
		$data["message"]["from_name"] = "MD Revolution";
		$data["message"]["to"] = $arr_to;

		$json_data = json_encode($data);
		$ch = curl_init('https://mandrillapp.com/api/1.0/messages/send-template.json');
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',                                                                                
		    'Content-Length: ' . strlen($json_data))
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		$result = json_decode($result);
	
		if(isset($result[0]->status) && $result[0]->status == "sent"):
		     redirect('/forms?msg=1', 'refresh');
		else:
		     redirect('/forms?msg=2', 'refresh');
		endif;
	}

	private function check_isvalidated(){
		$this->load->helper('url');
		if(! $this->session->userdata('validated')){
			redirect('login/login', 'refresh');
		}
	}
}

?>