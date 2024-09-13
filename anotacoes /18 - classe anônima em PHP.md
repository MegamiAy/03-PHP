## classe anônima em PHP

      class Utils{

            public function printMsg($msg){
                  $msg->showMessage();
            }
      
      }

      $utils = new Utils();
      $utils->printMsg($new Class{
            public function showMessage(){
                echo 'olá';
            }
      });
