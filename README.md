# googlephotos

This is a working application but will also be continuously worked on
I created this as a class because I want to add other functionality later.

simple class to get google photos from a google drive folder

install by composer

composer require robert-mill/googlephotos:dev-master

1. in google drive navigate to  the folder containing the photos/images to be displayed.
2. open folder and copy the url from the top of the browser
3. the url can be saved into a databse and called any way you wish or pasted directly into a new instance of the class

     require_once './robert-mill/classes/GooglePhotos.php';
    
        $albumid = '0B3WE-Ir69w7CQnlHREp4TFJmWk0';
        $googlepicsClass = new robertmill\classes\GooglePhotos($albumid);
   
        $data = $googlepicsClass->buildAlbum();
        echo $data;
   
    
4. Style the iframe to fit

