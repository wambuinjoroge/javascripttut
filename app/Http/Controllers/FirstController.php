<?php

$superheroes=array("spider-man"=>array(
"name"=>"Peter Parker",
"email"=>"peterparker@mail.com"
),
"super-man"=>array(
"name"=>"Clark Kent",
"email"=>"clarkkent@mail.com"
),
"bat-man"=>array(
"name"=>"Christian Bale",
"email"=>"christianbale@mail.com"
)
);
foreach ($superheroes as $superhero) {

    echo $superhero['name'];
    echo $superhero['email'];
}
// Datatables practice
public function datatables(Request $request){
	return Datatables::of($queries)
	->editColumn()
	->editColumn();
}
?>