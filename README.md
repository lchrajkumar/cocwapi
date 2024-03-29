# Church Of Christ Worship Verses API
Welcome to COC WV API. This repo is build upon Laravel Lumen API Framework for Church Of Christ Worship Verses Mobile App shaped on React Native.

## Introduction to Thought
Application is intended for Religious Worship of JESUS CHRIST believers in the CHURCH. Sunday Worships in CHURCH will have the following process (in general):
- Worship Starting Prayer
- Songs
- Reading Verses One after Another (by Church Members)
- Worshipping God in the name of JESUS by taking VERSES from the HOLY BIBLE
- Engaging with LORD Supper
- Thanksgiving to LORD from the beleiever's earnings (10% is common)
- Last Prayer of the Worship

Here we have initiated building a React Native mobile App for "Worshipping God in the name of JESUS by taking VERSES from the HOLY BIBLE" process in Sunday Worship at CHURCH.

### Worshipping God in the name of JESUS by taking VERSES from the HOLY BIBLE

#### Tentative Application name : CHURCH OF CHRIST WORSHIP VERSES

##### App Introduction

Application is used to engage all Church Of Christ believers at one place i.e., on Mobile. Even though the believer is going to CHURCH on every Sunday, the rest of days in a Week, he will engage with all other works and some times steps out of Word Of God unexpectedly.

So, we came with an Innovative thought to the above said point by building a Mobile Centric App which will help a believer to engage with the platform every day by memorizing the Verses which are said on Sunday at the CHURCH. In this way, the spiritual life of any CHRISTIAN citizen will be more engaged to GOD in this HUMAN WORLD.

### App Functionalities -- BACKEND [API]
#### Admin Dashboard

- [x] Dashboard

- Shows up the complete Proaganda about the Backend with Charts, Tables

- [x] Worship Time

- Displays Worship Timings added

- [x] Worship Time - Add

- Creating Worship Timings

- [ ] Worship Time - Update

- Updating Worship Timings

- [ ] Worship Time - Delete

- Deleting Worship Timings

- [x] Worship Verses

- Displays all Worship Verses added

- [x] Worship Verses - Add

- Creating Worship Verses

- [ ] Worship Verses - Update

- Updating Worship Verses

- [ ] Worship Verses - Delete

- Deleting Worship Verses

- [x] Worship Verses - Fetch operation [API CALL on FRONT-END]

- Fetching Worship Verses based on Given Date from Calendar

#### Front-End App
##### Screens
###### version 1.0
> These are the Mock-Up screens of Church of Christ Sunday Worship Verses (COCSW) Mobile App.

- [x] COCSW HomeScreen

- ![Image of COCSW HomeScreen](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554442439/Screenshot-2019-4-5_COC_SW_Fluid_UI.png)

- [x] COCSW HomeScreen - Notes View

- ![Image of COCSW HomeScreen - Notes View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554443269/Screenshot-2019-4-5_COC_SW_Fluid_UI_1.png)

- [x] COCSW HomeScreen - SideBar View

- ![Image of COCSW HomeScreen - SideBar View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554444685/Screenshot-2019-4-5_COC_SW_Fluid_UI_2.png)

- [x] COCSW About Church

- ![Image of COCSW About Church](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450439/Screenshot-2019-4-5_COC_SW_Fluid_UI_3.png)

- [x] COCSW About Church - SideBar View

- ![Image of COCSW About Church - SideBar View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450548/Screenshot-2019-4-5_COC_SW_Fluid_UI_4.png)

- [x] COCSW Donations

- ![Image of COCSW Donations](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450616/Screenshot-2019-4-5_COC_SW_Fluid_UI_5.png)

- [x] COCSW Donations - SideBar View

- ![Image of COCSW Donations - SideBar View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450758/Screenshot-2019-4-5_COC_SW_Fluid_UI_6.png)

- [x] COCSW About Developer

- ![Image of COCSW About Developer](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450822/Screenshot-2019-4-5_COC_SW_Fluid_UI_7.png)

- [x] COCSW About Developer - SideBar View

- ![Image of COCSW About Developer - SideBar View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554450876/Screenshot-2019-4-5_COC_SW_Fluid_UI_8.png)

- [x] COCSW Contact Us

- ![Image of COCSW Contact Us](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554451180/Screenshot-2019-4-5_COC_SW_Fluid_UI_9.png)

- [x] COCSW Contact Us - SideBar View

- ![Image of COCSW Contact Us - SideBar View](https://res.cloudinary.com/watermelon-apps-rjct/image/upload/v1554451236/Screenshot-2019-4-5_COC_SW_Fluid_UI_10.png)

### How to run API?
> This process is common in all platforms if you have MySQL DB configure priorly in PC/Laptop.
* Clone the repository into your local PC
* Place the cloned repository into your PC's Localhost directory. For example, in linux we place in /var/www/html/ path.
* Now navigate to your API directory using Terminal/CMD prompt.
* Add DB details as per your local DB in ".env" file.
> .env is not provided in repo. You can download one from here: [Link to .env file](https://res.cloudinary.com/watermelon-apps-rjct/raw/upload/v1554453396/rllsm5n2hk6nguoywtqp.env)
* Modify the ".env" file as per your local DB configs.
* Type as below command to create DB tables in your specified DB,
> php artisan migrate
* Start the server using the following command
> php -S localhost:8000 -t public
* Now navigate to the server URL provided in Terminal & do perform Back-End operations.
* That's it for now.


