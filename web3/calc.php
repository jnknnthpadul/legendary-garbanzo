<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if (is_numeric($_POST['val1']) && is_numeric($_POST['val2'])){
            $first_num = ($_POST['val1']);
            $second_num = ($_POST['val2']);
            
            # test if calc is not null
            if(isset($_POST['calc'])){
                $operator = $_POST['calc'];
                # switch statement for value of calc
                switch($operator){
        case $operator == "add":
           $result = $first_num + $second_num;
            break;
        case $operator == 'sub':
           $result = $first_num - $second_num;
            break;
        case $operator == 'mul':
            $result = $first_num * $second_num;
            break;
        case $operator == 'div':
            $result = $first_num / $second_num;
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>