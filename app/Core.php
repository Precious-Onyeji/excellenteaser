<?php

session_start();
require_once("DbConnection.php");

$dbCon= new DbConnection();

Class Core extends DbConnection {

    public function getnav() {
        
      $getnav=  mysqli_query($this->dbCon, "SELECT * FROM nav_details");
      return $getnav;


    }

    public function getHeaderText() {

      $getHeaderText= mysqli_query($this->dbCon, "SELECT * FROM header_text");
      return $getHeaderText;

    }

    public function getFooterText() {

      $getFooterText= mysqli_query($this->dbCon, "SELECT * FROM footer_text");
      return $getFooterText;

    }

    public function getAboutText() {

      $getAboutText= mysqli_query($this->dbCon, "SELECT * FROM about_us_text");
      $getAboutText= mysqli_fetch_object($getAboutText);
      return $getAboutText;

    }

    public function getServicesText() {

      $getServicesText= mysqli_query($this->dbCon, "SELECT * FROM our_service_text");
      $getServicesText= mysqli_fetch_object($getServicesText);
      return $getServicesText;

    }

    public function getContactText() {

      $getContactText= mysqli_query($this->dbCon, "SELECT * FROM contact_us_text");
      $getContactText= mysqli_fetch_object($getContactText);
      return $getContactText;

    }

    public function getIndexText() {

      $getIndexText= mysqli_query($this->dbCon, "SELECT * FROM home_text");
      return $getIndexText;

    }

    public function insertEnquiry() {

      if(isset($_POST['submit_btn'])){

        //Sanitize form inputs from harmful data
        $sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);
            $name = $sanitizer['name'];
            $email = $sanitizer['email'];
            $subject = $sanitizer['subject'];
            $message = $sanitizer['message'];
        
            $sqlInsert = mysqli_query($this->dbCon, "INSERT INTO enquiries(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')");

      } //end if

    } // end insertEnquiry

    public function returnAboutText($id) {

      $getAboutText= mysqli_query($this->dbCon, "SELECT * FROM about_us_text");
      $getAboutText= mysqli_fetch_object($getAboutText);
      return $getAboutText;

    }

    public function runUpdateAbout() {

      if(isset($_POST['update'])) {

        $id= $_POST['id'];
        $description_header= $_POST['description_header'];
        $description_body= $_POST['description_body'];
        $tested_header= $_POST['tested_header'];
        $tested_body= $_POST['tested_body'];
        $professional_header= $_POST['professional_header'];
        $professional_body= $_POST['professional_body'];
        $expert_header= $_POST['expert_header'];
        $expert_body= $_POST['expert_body'];
        $ceo_header= $_POST['ceo_header'];
        $ceo_body= $_POST['ceo_body'];

        $runUpdateAbout= mysqli_query($this->dbCon, "UPDATE about_us_text SET description_header='$description_header', description_body='$description_body', tested_header='$tested_header', tested_body='$tested_body', professional_header='$professional_header', professional_body='$professional_body', expert_header='$expert_header', expert_body='$expert_body', ceo_header='$ceo_header', ceo_body='$ceo_body'");
        

      }
    }

    public function returnContactText($id) {

      $getContactText= mysqli_query($this->dbCon, "SELECT * FROM contact_us_text");
      $getContactText= mysqli_fetch_object($getContactText);
      return $getContactText;

    }

    public function runUpdateContact() {

      if(isset($_POST['update'])) {

        $left_header= $_POST['left_header'];
        $left_body= $_POST['left_body'];
        $address= $_POST['address'];
        $phone= $_POST['phone'];
        $email= $_POST['email'];
        $right_header= $_POST['right_header'];
        $right_body= $_POST['right_body'];

        $runUpdateAbout= mysqli_query($this->dbCon, "UPDATE contact_us_text SET left_header='$left_header', left_body='$left_body', address='$address', phone='$phone', email='$email', right_header='$right_header', right_body='$right_body'");
        

      }
    }
    
    public function returnFooterText() {

      $returnFooterText= mysqli_query($this->dbCon, "SELECT * FROM footer_text");
      $returnFooterText= mysqli_fetch_object($returnFooterText);
      return $returnFooterText;

    }

    public function runUpdateFooter() {

      if(isset($_POST['update'])) {

        $id= $_POST['id'];
        $about= $_POST['about'];
        $strengths= $_POST['strengths'];
        $contact= $_POST['contact'];
        $social_media= $_POST['social_media'];
        
        $runUpdateFooter= mysqli_query($this->dbCon, "UPDATE footer_text SET about='$about', strengths='$strengths', contact='$contact', social_media='$social_media' WHERE id='$id'");
        

      }
    }

    public function returnServiceText($id) {

      $returnServiceText= mysqli_query($this->dbCon, "SELECT * FROM our_service_text");
      $returnServiceText= mysqli_fetch_object($returnServiceText);
      return $returnServiceText;

    }

    public function runUpdateService() {

      if(isset($_POST['update'])) {

        $mission= $_POST['mission'];
        $mission_body= $_POST['mission_body'];
        $vision= $_POST['vision'];
        $vision_body= $_POST['vision_body'];
        $philosophy= $_POST['philosophy'];
        $philosophy_body= $_POST['philosophy_body'];
        $trusted= $_POST['trusted'];
        $trusted_body= $_POST['trusted_body'];
        $professional= $_POST['professional'];
        $professional_body= $_POST['professional_body'];
        $stories= $_POST['stories'];
        $stories_body= $_POST['stories_body'];
        
        $runUpdateFooter= mysqli_query($this->dbCon, "UPDATE our_service_text SET mission='$mission',
        mission_body='$mission_body', vision='$vision', vision_body='$vision_body', philosophy='$philosophy',
        philosophy_body='$philosophy_body',trusted='$trusted',trusted_body='$trusted_body',professional='$professional',
        professional_body='$professional_body', stories='$stories', stories_body='$stories_body'");
        

      }
    }

    public function returnHeaderText($id) {

      $returnHeaderText= mysqli_query($this->dbCon, "SELECT * FROM header_text");
      $returnHeaderText= mysqli_fetch_object($returnHeaderText);
      return $returnHeaderText;

    }

    public function runUpdateHeader() {

      if(isset($_POST['update'])) {

        $id= $_POST['id'];
        $slider= $_POST['slider'];
        $reach= $_POST['reach'];
        $school_services= $_POST['school_services'];
        $home_devices= $_POST['home_devices'];
        $clothing= $_POST['clothing'];
        $accessories= $_POST['accessories'];
        
        $runUpdateFooter= mysqli_query($this->dbCon, "UPDATE header_text SET slider='$slider', reach='$reach', school_services='$school_services', home_devices='$home_devices', clothing='$clothing', accessories='$accessories' WHERE id='$id'");
        

      }
    }

    public function authenticateAdmin() {

      $query= mysqli_query($this->dbCon, "SELECT * FROM admin");
      $query= mysqli_fetch_array($query);
      return $query;

      if(isset($_POST['submit'])) {

        $username= $_POST['username'];
        $password= $_POST['password'];

        if($query->username==$username && $query->password==$password) {

          header('Location: view.php');
        } else {

        echo "<script> alert('Invalid Login Credentials') </script>";


        } // end else

      }

    } // end authenticate admin

  



} // end Core