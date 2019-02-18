<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
            echo "Hello World  ";
            echo "Hello, world!  ";
            echo "Hello, " . "" . "world" . "! "  ;
            echo 5 * 7 ;
            $myname = "SAMUEL IFEOLUWA ";
            $myage = 20;
            echo " My name is " . $myname . "and I am " . $myage;
            echo " I get printed!" ;
            // I don't! I'm a comment.
          /* I don't get printed either and neither do I */
          ?>
            <?php
          $name = "Samir";
          if ($name == "Love") {
              print "I know you!";
          }
          else {
              print "who are you?";
          }
          ?>
          <?php
              $numberOfHobbits = 2;
              switch ($numberOfHobbits) {
                  case 1:
                      echo "1 sad hobbit";
                      break;
                  case 2:
                      echo "2 happy hobbits";
                      break;
                  case 3:
                      echo "3 hobbits are crowd";
                      break;
                  default:
                      echo "All the hobbits have gone home";
              }

          ?>
        </p>
	</body>
</html>

