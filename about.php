<?php
    include 'includes/header.php';
?>

<div class="row main-row">
    
    <div class="col welcome">
        <img class="abstract-title-icon" src="images/Website/TitleLogo.png" alt="Introduction Icon" title="Introduction Icon">

        <h1> Away with apps? </h1>
        <h3>Interactive web 3D driven by relational databases </h3>
        This Website was a thesisproject by Jelle Vermandere. Here, you can find the abstract.

    </div>
</div>

<div class="row main-row">
    
    <div class="col-lg-4 col-md-6" >
        <img class="abstract-icon" src="images/Website/Introduction.png" alt="Introduction Icon" title="Introduction Icon">

        <h5>Defining the challenge: Introduction</h5>
        <hr>
        <p>
            The ever increasing amount of architectural data needs to be stored in online databases in order to be accessible and searchable. The data mostly consists of text and architectural plans, because storing and conserving one of the most useful documents in architectural presentations, the scale model, is very inefficient.
        </p>
        <img class="img-fluid abstract-img" src="images/Website/ArVsMaquette.jpg" alt="A photo of an Ipad using AR" title="Ipad AR Function">
        <p>
            This is where virtual 3D models can help fill the need for a better understanding of the buildings. Furthermore, placing these virtual models in the real world with the aid of a mobile device, can provide a very similar experience to a physical scale model, with the added benefits of accurate material representation, animations and more. This technology is called Augmented reality.
        </p>
    </div>
    <div class="col-lg-4 col-md-6">
        <img class="abstract-icon" src="images/Website/TheWebsite.png" alt="Website Icon" title="Website Icon">
    
        <h5>Providing a solution: The website</h5>
        <hr>
        <p>
        This thesis aims to lower the barrier of interacting with 3D models as much as possible by providing a full web based solution. This means that there is no need to download any extra apps or programs on the user’s device. The website links a database and 3D models that are connected to specific buildings of that database.         </p>
        <p>
        Everything that is produced for this thesis and the website is made with open source or free software. This ensures the future expandability of the website is not limited by expensive programs. 
        </p>
        <img class="img-fluid abstract-img" src="images/Website/WebsitesLayout.png" alt="A photo of the website layout" title="website layout">
        <p>
        The website is a combination of different technologies. Because of the rapid development of these kinds of technologies, most parts are interchangeable in case a better alternative becomes available. 
        </p>
    </div>
    <div class="col-lg-4 col-md-6">
        <img class="abstract-icon" src="images/Website/Modelling.png" alt="3Dmodel Icon" title="3Dmodel Icon">
        <h5>Creating 3D models for the web</h5>
        <hr>
        <p>
        Creating 3D models that are fully compatible with all the features of the website will require some specific needs. Displaying a 3D model on a screen requires three main parts: a 3D form, textures and a renderer. All these parts have different parameters and functions that need to be optimised in order to provide a smooth experience on the website. 
        </p>
        <img class="img-fluid abstract-img" src="images/Website/3dExplained.png" alt="A photo of 3D explained" title="3D explained">

        <p>
        For storing the final 3D models, the popular and efficient GL Transmission Format (glTF) file format was chosen. This format is built for fast rendering and is widely adopted on most platforms.
        </p>
    </div>
    <div class="col-lg-4 col-md-6">
        <img class="abstract-icon" src="images/Website/Database.png" alt="Database Icon" title="Database Icon">
        <h5>Constructing a database for the web</h5>
        <hr>
        <p>
        The database is an integral part of the website structure, because all the content of the website is stored in it. It also holds the references to the 3D models in order to make sure the correct models are linked to the buildings. The database is built with the open standard “Serial Query Language”. This allows multiple databases to be linked together. By linking the datasets together, relations can be set up. 
        </p>
        <img class="img-fluid abstract-img" src="images/Website/LinkedDatabase.png" alt="A photo of a linked database" title="Linked database">

        <p>
        These relations form the basis for large scale discoveries of new connections between buildings, architects, locations, time periods, and anything that is added to the database.
        </p>
    </div>
    <div class="col-lg-4 col-md-6">
        <img class="abstract-icon" src="images/Website/BuildingTheWebsite.png" alt="building website Icon" title="building website Icon">
        <h5>Building the website</h5>
        <hr>
        <p>
        The website allows the end users to explore all the data, present in the database, in a visual way. The 3D models will provide the extra information simple text and images can not provide. 
        </p>
        <img class="img-fluid abstract-img" src="images/Website/BuildingD.png" alt="A photo of the building webpage" title="building webpage">

        <p>
        The website uses three types of underlying technologies to create the functioning website: the database integration, the 3D model integration and the augmented reality integration.
        </p>
        <p>
        The website has a search page that is able to search the entire database for matches and connections. This feature allows curators, researchers and others to make a selection of works for an exhibition or research.
        </p>
        <p>
        Furthermore, every type of data has a dedicated page. That page will also show all the connected people and buildings. This way, the user can explore the data and find new relations. This includes buildings, the centre piece of the website. The connection with the 3D models is a integral part of this thesis.
        </p>
        <p>
        The website has a page for viewing the 3D models in a exhibition context. The page is linked to the camera of the mobile device of the visitor. With the aid of special bar codes (QR codes), the user will be able to view the 3D models in augmented reality.
        </p>
        <img class="img-fluid abstract-img" src="images/Website/ArD.jpg" alt="A photo of the AR webpage" title="AR webpage">

        <p>
        The website also has a submit page. Here, the 3D models and their information can be added to the database. The whole process of linking the 3D models to the database, setting up the different data pages and generating the markers for the augmented reality experience is automated. This allows the website to easily scale towards a large amount of different buildings.
        </p>
    </div>
    <div class="col-lg-4 col-md-6">
        <img class="abstract-icon" src="images/Website/Conclusion.png" alt="Conclusion Icon" title="conclusion Icon">
        <h5>Conclusion</h5>
        <hr>
        <img class="img-fluid abstract-img" src="images/Website/ArCameraPhone.jpg" alt="A photo of a phone using AR" title="Photo phone AR">

        <p>
        The website provides a working product that can be used for exhibitions and online archiving of architectural information. It is a great tool for visualizing large amounts of data and because of its search functionality, it can help researchers in their work. Much of the process of linking the 3D models to the database has been automated, ensuring scalability to very large databases. Because the website is made with open source frameworks, it is encouraged to expand this website with more functionality and future technology improvements. 
       </p>
    </div>
</div>


<?php
    include 'includes/footer.php';
?>




