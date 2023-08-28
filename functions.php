    <?php
    function checkID(){
    $pagesID = $_GET['page'];
    return $pagesID;
    //echo "page id: " . $pagesID; old code
    //foreach ($pagesID as $pageID){  old code
        //echo "the page ". $pageID['id']; old code
    }
    //} old code
    ?>
    <?php
    function checkTitle(){
        $ID = checkID();
        if  ($ID == 1) {
            $wel =  "Welcome";
            return $wel;
        }
        elseif ($ID == 2){
            $my_H = 'My Hobbies';
            return $my_H;
        }
        elseif ($ID == 3){
            $abo = "About";
            return $abo;
        }
        elseif ($ID == 4){
            $my_D = "My Dream Vacation";
            return $my_D;
        }
        else{
            $my_F = "My Favorite Movie";
            return $my_F;
            
        }

    }
    ?>