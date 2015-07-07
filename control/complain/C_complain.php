<?php
//em_id=1&complain=%5Bpk%5Dp&Apartemant=32&floor_number=12&address=32&operator=1&problem_type=2&problem_details=0&start_date=22&access_Network=1&prometical_Dial=2&Contract_Number=01277052673&detect_manual=1&solved=1&answer=no+answer+yat
if(isset($_GET['sendcomplain'])){
    echo $FN=$_GET['FN'];echo $Contract_Number=$_GET['ContactNumber'];
    echo$complain=$_GET['complain']; echo$AN=$_GET['AN']; echo$address=$_GET['address'];
    $selectOperator=$_GET['Selectoperator'];
    $data=date('l jS \of F Y h:i:s A');
    try{
            $getdata = array(
                        'em_id' => '1',
                        'complain' => "$complain",
                        'Apartemant' => "$AN",
                        'floor_number' => "$FN",
                        'address' => "$address",
                        'operator' => "$selectOperator",
                        'time' => "$data",
                        'problem_type' => '2',
                        'problem_details' => '0',
                        'start_date' => '22',
                        'access_Network' => '1',
                        'prometical_Dial' => '2',
                        'Contract_Number' => "$Contract_Number",
                        'detect_manual' => '1',
                        'solved' => '1',
                        'answer' => 'no'
                    );
            include_once '../../models/links.php';
            $M_link=new links();
                        echo '<br/><br/><br/>';
            echo $link=$M_link->send_complain();
            $url=$link.http_build_query($getdata);
                                  echo '<br/><br/><br/>';

            echo $url;
            $respone=  file_get_contents($url);
            print_r($respone);
            echo 'Data Has Been Send<br/>';
        }  catch (Exception $ex){
            return "Error in Send By Json<br/>";
        }
}
