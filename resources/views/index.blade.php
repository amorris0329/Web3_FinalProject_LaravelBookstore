<x-layout>


    <div class="container-fluid justify-content-center mb-5">
        <img class="img-fluid" src="{{ asset('images/titleImage.png') }}" style="border: 7px, solid, #4A32D4;" 
        alt="Image of a hand reaching out towards a book, with the words 'Elder Pages Book Emporium' across the image.">
    </div>
      
    <h1 class="text-center mx-5 text-2xl p-1" id="about">ABOUT US</h1>

    <div class="flex flex-row gap-5 mt-5 p-5">
        <img class="nora" src="{{ asset('images/NoraPage.png') }}" alt="An image of an old woman with a book. This is Nora Page.">
        <p class="normalText">
            Eleanor “Nora” Page has a dream - to make pre-modern texts accessible in the modern world. 
            A former Professor of Latin and Medieval Literature at Columbia University, her mission
            is to make it easier for students, scholars, and enthusiasts to get into historic books of all genres,
            from the philosophical texts of the ancient Greeks to the comedies of The Greats like Shakespeare 
            and Cervantes. Thanks to the time, effort, and care of her and our whole Elder Pages family, 
            our store has become the most prestigious place around to find historic books!
            <br><br>
                                        
            We have a wide selection of books from famous classical, medieval, and early modern authors. <br>
            Come for our Book Club every Wednesday night, where we go over famous books from across the <br>
            ages! Right now, we’re reading through Dante’s Inferno, the first book of the Divine Comedy!
            <br><br>
                                                        
            If you’d like to learn about history, literature, and culture from ages past, check out <br>
            Dr. Page’s YouTube Channel at: www.youtube.com/@NoraPagePHD
        </p>
    </div>

    <div class="my-10 h-screen flex items-center justify-center">
        <img class="object-center" src="{{ asset('images/announcement.png') }}" 
        alt="Announcement: Bake sale on November 10th to fundraise for the National Breast Cancer Foundation.">
    </div>


</x-layout>