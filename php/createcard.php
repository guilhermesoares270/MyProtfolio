<?php
    include('Mysql.php');
    // $array = array(1, 2);
    // for($i = 0; $i < 5; $i++){
    //     echo '<div class="card col-sm-4">
    //             <h5 class="card-header">Backpackers</h5>
    //             <div class="card-body">
    //                 <p class="card-text">Backpackers is an cellphone application developed for studies purposes with flutter.</p>
    //                 <a href="#" class="btn" style="color:#fff">See repository</a>
    //             </div>
    //         </div>
    //     ';
    // }

    $db = new Mysql();

    // $repo = new Repository(-1, 'php', 'esse código foi inserido via php');
    // $db->store($repo);


    // $repository = $db->get('teste');
    // echo '<div class="card col-sm-4">
    //         <h5 class="card-header"> '. $repository->getName() . '</h5>
    //         <div class="card-body">
    //             <p class="card-text">' . $repository->getDescription() . '</p>
    //             <a href="#" class="btn" style="color:#fff">See repository</a>
    //         </div>
    //     </div>
    // ';

    $repository = $db->getAll();
    foreach($repository as $item){
        echo '<div class="card col-sm-4">
            <h5 class="card-header"> '. $item->getName() . '</h5>
            <div class="card-body">
                <p class="card-text">' . $item->getDescription() . '</p>
                <a href="#" class="btn" style="color:#fff">See repository</a>
            </div>
        </div>
    ';
    }
?>