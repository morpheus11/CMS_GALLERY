<h1 align="center">CMS GALLERY 👋</h1>

## 🚀 Usage
>CMS project under development :-)
Hi guys, in this thread I am happy to make a small description of the CMS GALLERY. All codes will be simplified and all classes will be described as much as possible.

My plan is to make a very simple OOP PHP system with a UML schema
 
## ✨ UML scheme 

`OOP Principle` the whole project will be executed according to the uml schema. This is example image is friendly taken from a site [Visual Paradigm](https://www.visual-paradigm.com/guide/uml-unified-modeling-language/what-is-class-diagram/) that essentially shows the principle of the paradigm. `UML Scheme` process:

<p align="center">
  <img width="700" align="center" src="https://cdn-images.visual-paradigm.com/guide/uml/what-is-class-diagram/what-is-class-diagram.png" alt="demo"/>
</p>

<details>
  <summary>ClassDatabaseConnect</summary>
 
  <img align="center" src="https://raw.githubusercontent.com/morpheus11/CMS_GALLERY/main/lib/Classes/ClassDatabaseConnect/ClassDatabaseConnect.jpg"
  alt="ClassDatabaseConnect"/>
  
  Spoiler text. Note that it's important to have a space after the summary tag. You should be able to write any markdown you want inside the `<details>` tag... just make sure you close `<details>` afterward.
<details>
<summary>Code ClassDatabaseConnect</summary>
	
  ```php
  <?php 

require_once("config.php");

/**
 * ClassDatabaseConnect function openDbConnections for connect with db
 * or give error info
 */
class ClassDatabaseConnect
{
	public $connection;



	function __construct(){
		echo "string";
		$this->openDbConnections();
	}



	public function openDbConnections()
	{
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     	if(mysqli_connect_errno()){
     		die("mysqli connectio die with error" . mysqli_error());
     	}

	}

	public function query($sql) {

	$result = musqli_query($this->connection, $sql);
	
	return $result;	

	}

	private function confirm_query($result){

		if(!result) {
		die("Query Failed");	
		}

	}


	public function escape_string($string) {
		$escaped_string = mysqli_real_escape_string($this->connection,$string);
		return $escaped_string;


	}


}

 $database = new ClassDatabaseConnect();

 ?>
  ```
</details>  
</details>
