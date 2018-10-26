# p3
project( csv file displaying without inserting the data in database)
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller
 {
   public function index()
   {
	 $this->load->view('File/uploadfile');
   }
   public function do_upload()
   {
	 $csvFile = fopen($_FILES['userfile']['tmp_name'], 'r');
	            
	            // skip first line
	            // if your csv file have no heading, just comment the next line
	            fgetcsv($csvFile);
	            $i=0;
	            //parse data from csv file line by line
	            while(($line = fgetcsv($csvFile)) !== FALSE)
	            {   
					$line1[$i]=array($line[0],$line[1],$line[2],$line[3]);
					
					//print_r($line[$i]);
					$i++;
					//exit;
	              //$this->load->view('File/displaydata',$line);
	              //echo "<pre>";
	              //print_r($line);
	              //exit;
	            }
	            
	            //close opened csv file
	           // fclose($csvFile);
	            $data['res']=$line1;
	            //print_r($line1);
	            $this->load->view('File/displaydata',$data);
	}






}
?>
