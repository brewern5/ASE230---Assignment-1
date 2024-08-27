This is the first project of the semester for ASE 230 (Server Side Programming) This project serves as an introduction to PHP.

The goal of this project is to learn PHP syntax and usage inside of a HTML document.

This assingment is to use the echo function to fill in resume information inside a HTML document.

          
Patch 1            **_**8/25/24**_**

**CHANGES**
  -Removed *most* unnecessary files in other folders.
  -Created the $experience object to get a better understanding of objects in PHP and to understand PHP's syntax around objects.
  -Initialized the $digitorium as an $experience object.
  -Initialized *most* attributes for $digitorium.
  -Replaced some Work Experience information for the first position

**KNOWN ISSUES**
  -In the set_achievement function inside the $experience object, does not recognize the $achievemets_array as an array. This particular issue is causing errors in the display fields for their correlated outputs 
   (get_achievement output)
  -Profile image is not sized correctly


 Patch 2             **_**8/26/24**_**

**CHANGES**
  -Removed unnecessary lines inside the PHP document.
  -Initialized all other previous jobs
  -Created associative arrays to store, awards, languages, and projects
              - Some of these arrays are 2 dimensional
  -Added images for the $projects
  -Resized Profile image to fill in correctly

  Patch 3           **_**8/27/24**_**

  **CHANGES**
    -Added ; to the end of in-line echo functions
    -Replaced all "" strings with ''
    -Learned that you can have arrays inside objects
