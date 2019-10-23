<?php
/**
* Class Image_generator
* @author Simon Parker 22/07/2015
* @version 0.1
* @category File Access/Read
*
*/
class Image_generator
{
/**
 * [$img_array folder contents]
 * @var array
 */
	private $img_array = array();
	/**
	 * [$img_dir URL of folder]
	 * @var String
	 */
	private $img_dir;

 /**
  * @param String $pImg_dir Image Path
  * @return Array $img_array File Contents
  */
	public function push_images($pImg_dir) {
		$this->img_dir = $pImg_dir;
		$img_array = scandir ($pImg_dir);													//	Scan Folder Contents.
		$img_array = array_diff($img_array, array('.', '..'));		//	Remove Directory Roots (.,..).
		$img_array = array_values($img_array);										//	Re-assign Array with new index.
		foreach ($img_array as $key => $value) {									//	Concatenate image path.
			$img_array[$key] = $this->img_dir.$value;
		}
		$this->img_array = $img_array;														//	Re-assign to Class attribute for global scope access.
		return $img_array;																				//	Return the Array.
	}
	/**
	 * @return String
	 */
	public function get_img_dir () {
		return $this->img_dir;																		//	(Accessor/Getter) Return Image Folder Name.
	}
	/**
	 * @return Array
	 */
	public function get_img_array () {
		return $this->img_array;																	// (Accessor/Getter) Return Array Contents.
	}
}
?>
