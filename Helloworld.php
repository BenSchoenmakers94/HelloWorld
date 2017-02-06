<html>
    <head>
        <link type="text/css" href="Style.css" rel="stylesheet"/>
        <title>Php test environment</title>
    </head>

    <body>
    <?php $currentDate = date("d-m-y"); ?>
        <div class="brand">Test Website</div>
        <div class="date-bar">
            <?php echo "Today is ".$currentDate." and the time is ".date("h:i:sa"); ?>
        </div>
            <div class="container">
                <div class="box">
                    <?php
                    include 'Calendar.php';
                    echo draw_calendar(date(m-y));
                    ?>
                </div>
                <div class="box">
                    <?php
                    $array[0] = "Yeah";
                    $array[1] = "Groovy";
                    $array[2] = "Smashing";
                    $insufficient = 0;

                    $name = array("Theory_teacher" => "Dr. Evil", "Practicum_Teacher" => "Mini-me");

                    echo nl2br("Teachers: ".$name["Theory_teacher"]." and ". $name["Practicum_Teacher"]." \n");


                    $testBool;

                    if ($insufficient == $testBool) {
                        echo nl2br("This should print \n");
                    }
                    if ($insufficient === $testBool) {
                        echo nl2br("This should not print \n");
                    }

                    include 'Smashing.php';

                    show_info();

                    for ($i = 0; $i < sizeof($array); $i++) {
                        echo nl2br($array[$i] . "! \n");
                    }
                    $counter = 0;
                    do {
                        echo nl2br("Ha \n");
                        $counter++;
                        while (100) {
                            echo nl2br("TO INFINITY AND BEYOND \n");
                            continue 2;
                        }
                    } while ($counter < 100);
                    ?>
                </div>

                </div>
            </div>
        </div>
    </body>
</html>