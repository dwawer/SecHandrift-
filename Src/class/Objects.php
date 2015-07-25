<?php
class Objects
{
	var $O_id;
	var $name;
	var $picture;
	var $type;
	var $class;
	var $publisher;
	var $gainer;
	var $onshelf;
	var $descrition;
	var $pubDate;
	var $price;
	
	function __construct($O_id_, $name_,$picture_
                         $type_,$class_,$publisher_,
						 $gainer_, $onshelf_,$descrition_,
						 $pubDate_,$price_)
	{
	     $O_id = $O_id_;
	     $name = $name_;
	     $picture = $picture_;
	     $type = $type_;
	     $class = $class_;
	     $publisher = $publisher_;
	     $gainer = $gainer_;
	     $onshelf = $onshelf_;
	     $descrition = $descrition_;
	     $pubDate = $pubDate_;
	     $price = $price_;
	}
}
?>