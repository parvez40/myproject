Copy codecept.phar file in C:\xampp\php\ dir.
Open cmd prompt and go to C:\xampp\php\ dir using cd command.
Run command to install codecept: "php codecept.phar bootstrap"
Copy acceptance.suite and functional.suite file in "C:\xampp\php\tests" dir.
Copy loginCept.php and RegisterCept.php files in "C:\xampp\php\tests\functional" dir.
Copy homepageCept.php,searchCept.php and viewDealCept.php files in "C:\xampp\php\tests\acceptance" dir.
Run command in cmd prompt to run all test cases:"php codecept.phar run"
Run command in cmd prompt to see steps of test cases:"php codecept.phar run --steps"
Run command in cmd prompt to see steps of acceptance test cases only:"php codecept.phar run acceptance --steps"
Run command in cmd prompt to see steps of functional test cases only:"php codecept.phar run functional --steps"
