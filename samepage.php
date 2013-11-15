<!DOCTYPE html>
<html>
    <head>
		<title></title>
	</head>
	<body>
    <?php
     $degree = 'postgraduate';
     
     switch ($degree):
         case 'graduate':
             echo 'Please do the Post Graduation also';
             break;
         case 'postgraduate':
             echo 'I suggest you to look for a job';
             break;
         default:
             echo 'Be serious in your Studies';
     endswitch;
    ?>
	</body>
</html>