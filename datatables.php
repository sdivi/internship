<?php  


    include 'connection.php';
                               $conn=dbconnection();
                               $qstr = "select * from internship_opp" ;
                                           
                                 //echo $qstr;
                               $result=mysql_query($qstr);
                                           //while($row = mysql_fetch_array($result)){
                               //print_r($row);
                                           
                                           //echo($row["internship_id"]);
                                           
                                           //}





          while($row = mysql_fetch_array($result)){
                                                            
                                                            echo "<tr>";
                                                            echo "<td>".$row["internship_id"]."</td>";
                                                            echo "<th>".$row["job_desc"]."</th>";
                                                            echo "<th>".$row["business_id"]."</th>";
                                                            echo "<th>".$row["supervisor_id"]."</th>";
                                                            echo "<th>".$row["pay"]."</th>";
                                                            echo "<th>".$row["semester"]."</th>";
                                                            echo "<th>".$row["admin_id"]."</th>";
                                                            echo "<th>".$row["weekly_hrs_req"]."</th>";
                                                            echo "<th>".$row["start_date"]."</th>";
                                                            echo "<th>".$row["end_date"]."</th>";
                                                            echo "<td>";
                                                            echo  " <button>";
                                                            echo  " APPLY ";
                                                            echo "</button>";
                                                            echo  " </td>";
                                        echo "</tr>";                                       
                                                            
                                                    }
                                                    
                                                    ;?>