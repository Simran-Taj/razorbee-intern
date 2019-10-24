<?php
                    $date = date("Y-m"). "-01";
                    $end_date = date("Y-m-d");
                    $task=0;
                    while (strtotime($date) <= strtotime($end_date)) 
                    {
                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                        $task++; 
                        echo "<td><input id=task>"."</td>";
                        echo "<td>"."<button id=addtask type=button class=btn btn-primary btn-lg data-toggle=modal onclick=save('task') data-target=#myModal>Add task</button>"."</td>"."</tr>"."</tr>";
                    }    
                ?>