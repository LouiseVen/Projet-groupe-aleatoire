<?php


            $groupeCountNumber = 1;
            
            // Boucle principale de création des groupes
            for ($i = 0; $i < $nbGroupsToCreate; $i++)
            {
                echo "Groupe" . " " . $groupeCountNumber++ . " " . "composé de : <br>";
                // Récupération aléatoire de x clés depuis le tableau complet
                $randGroupe = array_rand($allStudents, $nbStudentsToAffect);
                
                // On parse le tableau retourné
                for( $j=0;$j<$nbStudentsToAffect;$j++)//$randGroupe as $key => $nameStudent)
                {
                    "<div class='card'><div class='card-details'> <p class='text-title'>";
                    echo $allStudents[$randGroupe[$j]]. "</p> <p class='text-body'>";
                    unset($allStudents[$randGroupe[$j]]); "</p></div></div>";
                }; 
                echo "<br>";  
            }
    
    




            //for ($i = 0; $i < $nbStudentsToAffect; $i++) {
            //    $randGroupe = array_rand($allStudents, $nbStudentsMax);
           
            
            //echo "Groupe" . " " . $groupeCountNumber++ . " " . "composé de : <br>";
           // foreach( $randGroupe as $key=> $nameStudent){
           //     echo $nameStudent. "<br>";
           //     unset($randGroupe[$key]);
            
           // };

/*
            echo $students[$randGroupe[0]] . ", " . $students[$randGroupe[1]] . ", " . $students[$randGroupe[2]] . ", " . $students[$randGroupe[3]] . "<br>";
            //print_r( $randGroupe);
            unset($students[$randGroupe[0]], $students[$randGroupe[1]], $students[$randGroupe[2]], $students[$randGroupe[3]]);
            */
       // };


        //var_dump($_POST); ?>