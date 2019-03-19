# Developer Back End Test
The object of this test is to check your skills with different products that we use.  
1.   Please clone this repository onto your local machine.  
2.   Commit this to you own private github account without any modification on the master branch.  
3.   Create a branch Development and push directly. This is where you work will begin.  
4.   Install composer and necessary PHP7.2 / MySQL onto your local machine. We don't mind that you use Apache but Nginx is preferable.  
5.   Install symfony onto your local workstation. Branch again to Symfony-Install. Add an ignore to vendors directory but add everything else and create a pull request to Development Branch with the commit.  
6.   Branch yet again making sure changes from Symfony-Install are merged.  
7.   Create a basic Entity called Software. It needs three fields.   
     > Id - INT 11 Unsigned Auto Increment  
     > ProductName - VARCHAR 50  
     > VendorID INT 11 Unsigned
  8.   Create an entity called Vendor. It needs 2 fields and has a FK to VendorID in Software Entity  
     ````      
           
           Id - INT 11 Unsigned Auto Increment  
           VendorName - VARCHAR 50  
9.   Download BackboneJS and install in pub under js directory
10.  Build a route / contoller and repository methods to perform CRUD on above 2 tables using Backbone Views / Models 
11.  Commit the working code in a branch called Backbone-Test. Submit it for pull request to Devlopment as well.



