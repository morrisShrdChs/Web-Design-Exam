<?php

class File implements iFile{
	public $filePath;
	public $text;

		public function __construct($filePath){
			$this->filePath = $filePath;

}
		public function getPath(){
			return $this->filePath;
		}
		public function getDir(){
			$path_parts = pathinfo($this->filePath);
			return $path_parts['dirname'];
		}
		public function getName(){
			$path_parts = pathinfo($this->filePath);
			return $path_parts['filename'];
		}
		public function getExt(){
			$path_parts = pathinfo($this->filePath);
			return $path_parts['extension'];
		}
		public function getSize(){
			return filesize($this->filePath);
		}
		
		public function getText(){
			return file_get_contents($this->filePath);
		}
		public function setText($text){
			file_put_contents($this->filePath, $text);
		}
		 public function appendText($text){
			file_put_contents($this->filePath, '!', FILE_APPEND);
		 }
		
		public function copy($copyPath){
			copy($this->filePath, $copyPath);
		}
		public function delete(){
			unlink($this->filePath);
		}
		public function rename($newName){
			rename(pathinfo($this->filePath)['filename'].'.'.pathinfo($this->filePath)['extension'], $newName);
		}
		public function replace($newPath){
			rename($this->filePath, $newPath);
		}

}

	interface iFile
	{
		public function __construct($filePath);
		
		public function getPath();
		public function getDir();
		public function getName();
		public function getExt();
		public function getSize();
		
		public function getText();
		public function setText($text);
		 public function appendText($text); 
		
		public function copy($copyPath);
		public function delete(); 
		public function rename($newName);
		public function replace($newPath);
	}

$myF = new File('OOP php\test.txt');
echo $myF->getPath().'<br>';
echo $myF->getExt().'<br>';
echo $myF->getSize().'<br>';
echo $myF->getText().'<br>';
echo $myF->appendText('yjjyjjyjjyjyjyjyj').'<br>';
echo $myF->rename('newName.txt').'<br>';
?>