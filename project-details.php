<?php 
include('includes/connection.php'); 
include('includes/class.php'); 
include('includes/header.php'); 
?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
        <!--Page Header Start-->
<?php $projectTitle = $_GET['proj']; 
                $table				=   "tbl_blog";
				$where				=	"blogTitle = '".$projectTitle."' and blogStatus ='1'";	
				$blogDetails	    =	$classFetch->select_Record_Where($table,$where);
				print_r($blogDetails);
				foreach($blogDetails as $bdKey=>$bdVal)
				{
				$table				=   "tbl_blogdetail";
				$where				=	"blogTitle='".$bdVal['blogTitle']."'and blogDetailStatus ='1'";	
				$blogCompleteDetails=	$classFetch->select_Record_Where($table,$where);
 ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(admin/blogPics/<?php echo $bdVal['blogPic']; ?>)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2><?php echo $bdVal['blogTitle']; ?></h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="admin/blogPics/<?php echo $bdVal['blogPic']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  nicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1"><?php echo base64_decode(trim($blogCompleteDetails[0]['blogDetail'])); ?></p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } ?>
 <?php $projectNo = $_GET['proj']; if($projectNo == '1'){ ?>
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>E-Charcha – Advocacy on child marriage and child survival</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-echarcha-1-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  nicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">Transforming lives by generating awareness on adolescent issues such as child marriage, child protection and nutrition through digital platform “E-Charcha”. An initiative supported by UNICEF India and directed to bring stakeholders to action.
<br/><br/>
Early marriages are prevalent in the rural communities of the states of Rajasthan and Haryana. This informal union through institution of marriage before age of 18 is a common customary practice for both boys and girls, although girls are disproportionately more at risk. It also affects society as a whole since child marriages reinforce a cycle of poverty, perpetuating gender discrimination, illiteracy and malnutrition including high infant and maternal mortality rates. Although child marriages are declining with awareness and education, the rate of change is incidentally slow, calling out for more collaboration and partnerships within and across to effectively handle the issue.
<br/><br/>
In the light of above, FDI with support from UNICEF-Rajasthan created a digital platform through the website “E CHARCHA” for generating awareness on issues of child marriage, child protection and nutrition. The effort was directed to create awareness and bring stakeholders to action. The role of print, online and electronic media, thus becomes, particularly important in supporting and enriching the quality of discourse on different aspects, for effective outreach and sensitization for the masses.
<br/><br/>
In order to spread adequate awareness and involve media to support this effort, FDI set up a content distribution channel through a website – https://www.e-charcha.com/
<br/><br/>
Ø The content of the website was packaged to sensitize journalists on development issues and to generate awareness on new media and building  their capacity by identifying and motivating accredited media institutions.
<br/><br/>
Ø An app version for the website was also created and made live through Google Play Store : https://play.google.com/store/apps/details?id=com.echarcha.fdi.
<br/><br/>
The project also empowered, particularly,  32 grassroots journalists from Udaipur district of Rajasthan through digital platform and tools with a support mechanism of field activities.
<br/><br/>
OUTCOMES AND RESULTS
<br/><br/>
Ø Workshops for journalists: Training workshops for grassroots journalists to sensitize and involve them on issues of education, child marriage, nutrition child protection and social protection schemes were conducted.
<br/><br/>
Ø Orientation sessions on key aspects of reporting on child protection, nutrition, child marriage and education including child rights were conducted by specialists with participation of  32 journalists
<br/><br/>
Ø Rural Journalism Award: As a means to encourage and motivate journalists to effectively follow the outcome of training programme in their reporting, their stories were acknowledged and best ones were awarded with ‘Journalism Award’.
<br/><br/>
Ø Online media campaigns: Sensitizing stakeholders specifically on child survival and its challenges in Rajasthan.
<br/><br/>
Various social media handles were also created for E CHARCHA.
<br/><br/>
Ø YouTube: Stories and outcomes of reportage were also uploaded on : https://www.youtube.com/channel/UCwKU2MPhFaBLP34Xmz_IdWw for wider dissemination.
<br/><br/>
Four videos were also  uploaded on this channel for public awareness and sensitization receiving more than 3,400 views with their details underneath:
<br/><br/>
Ø Facebook: https://www.facebook.com/E-Charcha-352281058729812 ,  https://www.facebook.com/echarchainitiative
<br/><br/>
Four videos and three articles have since been published with more than 150 unique likes on the page.
<br/><br/>
Ø Twitter: https://twitter.com/echarcha1
<br/><br/>
Four videos have since been published
<br/><br/>
Ø Instagram handle : https://www.instagram.com/echarcha/
<br/><br/>
Ø WhatsApp: Group has been created and two videos shared.
<br/><br/>
The “E-CHARCHA” website has achieved an all India ranking of 87,938 on Alexa, a global tool for website rankings. Through our digital media campaign on child survival and child rights, we have been able to reach out to around two million people across the country so far.
<br/><br/>
By effectively implementing this initiative, the Foundation has helped bridge communication, information and knowledge gaps among the grassroots journalists in far-flung districts by connecting them to subject experts and front runners in the media field. This has, in turn, enhanced their understanding of concepts on priority issues and key messaging including potential barriers and challenges that are evident and on strategies to overcome them.
<br/><br/>
I would like to, in particular, thank UNICEF, Rajasthan for their support and in trusting us in taking forward this important project. Without their support, we would not have been able to achieve the desired project outcomes that we could in a short period of time. The success of the project, in a large part, is due to Suchorita Bardhan, communication specialist, UNICEF, Rajasthan whose continued support mattered the most in successful completion of the project.
<br/><br/>
As we move forward into the next fiscal, we aim to further strengthen our efforts, accelerate our pace and bring on board concerned stakeholders  to collaborate and address some challenging issues of our society with far reaching bearing on positive social outcomes. Our activities and initiatives are well aligned with national development priorities and sustainable development goals agenda and we are prepared to play our role in a humble and a small way.
<br/><br/>
I would also like to thank our partners, collaborators, colleagues and members of the  board of FDI for their continuing support and look forward to a more meaningful engagement  over the period of next year and beyond.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } elseif($projectNo == '2'){?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Adoption of ICT as a tool for knowledge management & information sharing</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-icttool-1-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">Since 70% of India’s population lives in the rural areas, FDI’s strategy is to impact the rural communities, bringing about rural growth and empowerment.
 <br/><br/>
(i) Creation of sustainable livelihood opportunities, with emphasis on environmental conservation and promotion of traditional skills.
<br/><br/>
(ii) Development of markets & other support systems.
<br/><br/>
(iii) Adoption of ICT as a tool for knowledge management & information sharing.
<br/><br/>
Since a large part of our work forms empathetic common cause with the objectives of your esteemed organization, I’m proposing the following under our ICT goal with regard to the laudable work GHSEE is doing in north India in the areas of health:
<br/><br/>
1.A Panel Discussion in New Delhi on the importance of states in achieving Human Development Index (HDI) goals. This will address the skewed performance of some states in achieving these goals, the reasons and solutions. We will have eminent television journalist Ms Rupali Tewari moderate this 90-minute discussion followed by questions from the invited audience. The panel of guests will be selected in consultation with GHSEE.
<br/><br/>
2.A Panel Discussion in Lucknow in May on the role of nutrition in the growth of children & their well-being. We will have eminent journalist Mr Pankaj Pachauri moderate this 90-minute discussion followed by questions from the invited audience. The panel of guests will be selected in consultation with GHSEE.
<br/><br/>
3.A Panel Discussion in Bhopal on the rights of tribals & forest dwellers in meeting challenges of health. We will have eminent journalist Mr Pankaj Pachauri moderate this 90-minute discussion followed by questions from the invited audience. The panel of guests will be selected in consultation with GHSEE.
<br/><br/>
4.A six-part series titled Voices From The Hinterland, to magnify and dissect the issues of local men & women in the rural areas, based on group conversations with them. The moderator for this series of 30-minute capsules will be eminent television journalist Mr Darain Shahidi. We will pick the locations and themes based on the ongoing programmes of GHSEE.
<br/><br/>
5.A six to 10-minute Ground Report on the chronic lung diseases in Bundelkhand region of Uttar Pradesh. It will examine the genesis of the issue and flag solutions.
<br/><br/>
6.A six to 10-minute Ground Report on child health in Mewat, Haryana. It will showcase an Ayushmaan Bharat case study.
<br/><br/>
7.A six to 10-minute Ground Report on gender disparity in Rajasthan & ways to offset it. It will look at the microcosm of Jodhpur.
<br/><br/>
8.A six to 10-minute Ground Report on the role of ANMs & ASHAs in Madhya Pradesh. It will assess the efficacy of this intervention & how it should evolve.
<br/><br/>
9.Alongside these specialized initiatives, FDI will produce 12 factoids on associated themes of one minute each, based on interesting data, for easy dissemination on social media.
<br/><br/>
FDI will involve specialized digital media practitioners and experts to execute this plan, in close consultation & coordination with GHSEE.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php } elseif($projectNo == '3'){?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Circular Designing And Future Of Sustainability: Now Is Next</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-circular-design-1-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">FDI is committed towards addressing the issues around sustainable development, particularly circular economy as future of sustainability. We bring together, practising professionals and senior experts from the range of sectoral fields for ongoing debates and discussions around the theme of circular economy and waste minimisation.
<br/><br/>
India high level panel on Circular Designing and Future of Sustainability: Now is Next was implemented by Foundation for Development Initiative at India International Centre, New Delhi on 22nd November, 2019, with support from the Swedish Institute, Stockholm based public diplomacy entity under the ministry of foreign affairs of the Swedish Government via Sweden Alumni Network India to delve deeper into practical and functional aspects of circular economy, its designing, application and potential opportunities. This high level panel brought senior experts and practising professionals from a range of sectoral fields, the outcome of the high level panel highlighted the ongoing debates and discussions around the theme of Circular Economy.
<br/><br/>
FDI is committed to address issues around Sustainable Development Goals (SDGs) particularly Circular Economy on the lines of joint co-operation agreement between Governments of India and Sweden.
<br/><br/>
The opening plenary included. panellist and speakers – Pooran Chandra Pandey, Curator and Director, India High Level Panel, Senior Advisor to Sweden Alumni Network India, Delhi Chapter, Founding CEO, Dialogue of Civilizations Research Institute, Germany, Ambassador Ashok Sajjanhar, Former Ambassador of India to Kazakhstan, Sweden and Latvia,  Anders Wickberg, Swedish Trade Commissioner to India and Head of Business Sweden, Ambassador Anup Mudgal, Former Indian High Commissioner to Mauritius, Mohd. Haleem Khan, ( IAS, Rtd), Former Secretary to the Ministry of Finance, Government of India, Bishow Parajuli , Representative and Country Director,   United Nations World Food Programme, Jayanthi Pushkaran,  President, Sweden Alumni Network India Delhi Chapter, Monika Wirkkala, Head of the Talent Attraction Unit at the Swedish Institute.
<br/><br/>
High Level Panel was moderated by Pankaj Pachauri, Media Adviser to Former Indian Prime Minister, Founder and Editor-in-Chief, GoNews, Mohd. Haleem Khan, ( IAS, Rtd), Former Secretary to the Ministry of Finance, Government of India, Anders Wickberg, Swedish Trade Commissioner to India and Head of Business Sweden, Vishvesh Prabhakar, Managing Director and Partner with Accenture Strategy India, Nishtha Satyam, Deputy Country Representative for UN Women, and Saharsh David, Head CSR, Sandvik Asia Pvt Ltd.
<br/><br/>
The Event was a confluence of perspectives and ideas shared by Govts, Think Tanks,  Corporates, Business Chambers and Multilateral Institutions. The panel agreed that while Growth was an imperative however, we need to rethink Sustainability to integrate it in the development process. India has a big role to play nationally as well as globally If the world has to meet SDG targeted SDG goals. Amb. Sajjanhar stressed that unless India’s address challenge related to  poverty first, it would be difficult to meet the defined miles towards sustainability.
<br/><br/>
Around 100  delegate representing though leaders from UN agencies, Media, Diplomacy, Business Chamber and Government and International  Development institutions participated in the event.
<br/><br/>
The follow up from the India high level panel are proposed to be the following:
<br/><br/>
1. Content of the panel will be curated, printed and presented to key stakeholders in government, private sector, media, UN and its systems and bilateral and multilateral agencies for outreach and potential collaboration
<br/><br/>
2. Setting up of a core group drawn from various sectors and quarters to further ideate on the outcomes of the high level panel and evolve future possibilities
<br/><br/>
3. High level panel outcomes will be converted into a book project to be brought by one of the leading publishing houses for wider dissemination of the concept and ideas around the theme within academic institutions including think tanks , and
<br/><br/>
4. Exploring possibility of holding a summit on circular economy and sustainability in 2020.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php } elseif($projectNo == '4'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Providing improved access to safe drinking water to farmers in Mandis of Punjab and Haryana</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-water-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">FDI with the support from PI Foundation Trust launched a programme of providing safe drinking water to needy farmers and labourers in 36 mandis of Punjab, Haryana and J&K with the active support from mandi development committee.
<br/><br/>
Availability of safe drinking water remains a concern in rural belts of the country that leads to increased health burden for water-borne diseases.  Farmers, especially during the peak harvest visit the mandis to sell their produce. Tube wells which cater to drinking water are dry due to depleting water levels. Farmers in that case resort to unsafe sources of water to quench their thirst and often fall sick of water contamination which adversely affects their livelihood in the peak season of harvest.
<br/><br/>
To address the challenge, FDI with the support from PI Foundation Trust launched a programme of providing safe drinking water to needy farmers and labourers in 36 mandis of Punjab, Haryana and J&K with the active support from mandi development committee.
<br/><br/>
Under the project, RO mineral water was purchased and water stalls were set up within the mandis. We provided drinking water to 43,717 farmers in different grain markets of Punjab and Haryana. The project has benefited the underprivileged farmers and labourers, and has safeguarded them against dehydration & diseases due to unsafe consumption of water.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php } elseif($projectNo == '5'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Setting up Solar System for Electricity back up in rural underprivileged School</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-solar-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">FDI is setting up solar power back-up in a rural school of U.P which will help effective learning practice amongst children ensuing qualitative improvement in learning skills and serve as model for other schools to replicate. This will also improve the quality of teaching and overall ambience in the classrooms.
<br/><br/>
In India, rural schools often have classrooms that remain dark even during the day due to sporadic power cuts and poor ventilation. Without any power backup, especially when the small windows have to be closed to prevent the heat from coming in; the lack of light prevents children inside the dark classrooms from looking at their books or writing, which compels them to study outside the classrooms even in the day time. This has led to poor learning outcome amongst rural Children.
<br/><br/>
The District Information System for Education (DISE) 2018 data shows only 53% of total government schools, which form majority of schools in rural India have electricity connection. The unavailability of power back-up in the school thwarts children’s abilities to develop new learning and I.T skills as computers are not operational due to paucity of electricity. To overcome this difficulty in rural schools there is a need to introduce the sustainable source of electricity that will provide children with access to requisite power supply in the school premises.
<br/><br/>
FDI is setting up solar power back-up in a rural school of U.P which will help effective learning practice amongst children ensuing qualitative improvement in learning skills and serve as model for other schools to replicate. This will also improve the quality of teaching and overall ambience in the classrooms. Electricity access will facilitate the introduction of ICTs into the classroom such as computers and digital blackboard. Electrified schools can enable principals to recruit and retain better qualified teachers, and have been correlated with improvements on both test scores and graduation rates.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php } elseif($projectNo == '6'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Training for farmers to promote safety measures during Agro-chemical application</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/Project-FARMER-1-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">FDI is working towards promoting sustainable agriculture practices across the three pillars of triple bottom line approach...
<br/><br/>
The great variety of agrochemicals used in Indian agriculture presents varying degrees of hazard. These products, if not handled properly, can be potentially dangerous and can cause rampant accidents to the user.
<br/><br/>
Therefore, looking at the readiness of unskilled youth and farmers in seeking training, FDI initiated a programme with the support from PI Foundation.
<br/><br/>
1. The programme focussed on to increasing the awareness on strictly following the safety guidelines for usage of agro-chemicals by farmers and applicators.<br/>
2. The training location was chosen to be Lucknow with the support from Dept. of Agriculture, Uttar Pradesh.<br/>
3. Ensuring usage of safety kit by the community and compliance with safety instructions on the label.<br/>
<br/><br/>
Around 1,500 farmers were benefitted and made aware on the effective and safe application of chemicals to pre-empt any casualties.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php }elseif($projectNo == '7'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>ECO-FIKA event for advocacy of environmental and social causes</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/eco-FIKA-840x424.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">The Eco-Fika Event was held at Nordic Centre on June 22, 2019 to commemorate and follow up on the World Environment Day (5th June).
<br/><br/>
Delhi-NCR has become particularly vulnerable to climate change due to high concentration of people, infrastructures, housing and economic activities. Climate change increases the frequency and intensity of extreme weather events, aggravates water management problems, reducing food security, increases health risks, damages critical infrastructure and interrupts the provision of basic services such water and sanitation, education, energy and transport. Conscious steps need to be introduced by citizens, in their everyday lives, to reduce their carbon footprint.
<br/><br/>
With that objective, the Eco-Fika Event was held at Nordic Centre on June 22, 2019 to commemorate and follow up on the World Environment Day (5th June). The event was inspired by the concept developed by the Swedish Society for Nature Conservation (Naturskyddsföreningen), which encourages participants to come together to think and talk about the effects on the environment from the way they choose to eat, drink and live.
<br/><br/>
The Event was held at the Nordic Centre, New Delhi and presentations and case studies were shared about:
<br/><br/>
1. Initiating community action to make Delhi-NCR more environmentally sensitive and sustainable. Emphasis was laid on wide-scale and urgent steps to avoid further human, social and economic losses.<br/>
2. Substituting lifestyle toxins with organic options in food, clothing, personal care products etc<br/>
3. Exploring and implementing viable options for clean air, water and energy<br/>
<br/><br/>
The Event concluded with the participants sharing their learnings and experiences over organic coffee and snacks, taking up green challenges and pledging to live eco-friendly lifestyles.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } elseif($projectNo == '8'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Harit Dhara, Saaf Vayu: Empowering Communities, Sustaining Lives</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/harit-dhara-saaf-vayu-empowering-communities-sustaining-lives-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">Harit Dhara, Saaf Vayu: Empowering Communities, Sustaining Lives
<br/><br/>
The persistent issue of burning crop residue, particularly paddy stubble, has posed significant environmental challenges during North India's winters, notably in Haryana, Punjab, and Uttar Pradesh. The lean timeframe between the Kharif crop (paddy) harvest and rabi crop (wheat) sowing, combined with limited cost-efficient alternatives for residue management, has led to substantial burning. In 2021 alone, these states witnessed 13 million tons of stubble burnt, resulting in approximately 80,000 fire incidents. This extensive burning contributed to severe environmental repercussions, including the emission of ~19 million tonnes of CO2 and other greenhouse gases, a 'Severe' Air Quality Index in the National Capital Region, leading to 2-3 times higher respiratory issues in winter, a 10-15oC rise in soil temperature, and a staggering ~312 million USD loss of revenue from burning.
Jind district in Haryana ranked third highest in fire incidents, accounting for 505 Active Fire Locations (AFLs), nearly 14% of the total AFLs in Haryana. These 505 AFLs in Jind caused an estimated 0.12 million tonnes of stubble burnt, emitted 0.17 million tonnes of CO2 and other greenhouse gases, and resulted in a substantial ~2.18 million USD loss of revenue from burning.
<br/><br/>
The initiative “Harit Dhara, Saaf Vayu” focuses on Crop Residue Management and Direct Seeding of Rice in Jind District, Haryana, with a strategic objective to combat the enduring challenge of stubble burning in North India, particularly within Haryana’s Jind district. The project is designed to address the complex issue of stubble burning through a multi-pronged approach, promoting sustainable agricultural practices and contributing to environmental conservation and community well-being in 96 villages of 7 blocks in Jind, 18,708 acres of farmland, and will benefit 5,492 farmers.
<br/><br/>
Foundation for Development Initiative (FDI) has partnered with NatWest India Group, the Department of Agriculture, Haryana, District Administration, Jind, Haryana State CSR Trust, Custom Hiring Centres (CHCs), and Farmers.
<br/><br/>
The project’s primary objectives include reducing Active Fire Locations (AFLs) in the Jind district, raising awareness about the harmful effects of stubble burning, promoting alternative methods like Crop Residue Management (CRM), and sensitizing farmers to Direct Seeding of Rice (DSR), a climate-smart agriculture practice. Various activities such as stakeholder engagement, focus group discussions, one-to-one interactions, awareness programs, and the use of the Krishi Yantra Saathi mobile application for CRM services will be pillars of the project.</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } elseif($projectNo == '9'){ ?>
 <section class="page-header">
            <div class="page-header-bg" style="background-image: url(assets/images/fdi-4.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Crop Residue Management (CRM) Initiative</h2>
                </div>
            </div>
        </section>
        <!--Page Header End-->
        <!--Project Details Start-->
        <section class="project-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="project-details__left">
                            <div class="project-details__img">
                                <img src="assets/images/crop-residue-management-crm-initiative-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="project-details__right">
                            <h3 class="project-details__title">Partner Projects</h3>
                            <ul class="list-unstyled project-details__list">
                                <li>
                                BMGF (1)
                                </li>
                                <li>
                               Pi Foundation (3)
                                </li>
                                <li>
                                Swedish Institute (2)
                                </li>
                                <li>
                                  Unicef (1)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="project-details__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="project-details__text-box">
                                <p class="project-details__text-1">The North Indian states of Punjab, Haryana, and Uttar Pradesh suffer from rampant air pollution, emission of GHG, respiratory issues, and increased soil temperature every o due to widespread burning of the paddy straw in the harvest season in winter. Amongst them, Haryana ranks second highest in terms of the amount of stubble burnt (1.6MT) and number of occurrences of fire incidents (6987) in the year 2021.
<br/><br/>
The FDI (Foundation for Development Initiatives) partnered with Deloitte in spearheading a Crop Residue Management (CRM) to make a significant impact in the agricultural landscape of Haryana, specifically in the 24 red villages and 72 yellow villages in Jind, as well as the 36 red villages and 107 yellow villages in Kaithal.
<br/><br/>
Addressing the critical issue of stubble burning, the initiative aimed to combat air pollution, greenhouse gas emissions, and respiratory challenges prevalent in North Indian states during the winter harvest season. In 2023, recognizing challenges such as limited awareness, lack of affordable CRM machines, and the absence of a formalized marketplace, Deloitte and FDI adopted a three-pronged strategy across district, block, and village levels:
<br/><br/>
1. IEC Awareness Program: An innovative Information, Education, and Communication (IEC) campaign designed and executed to raise awareness among farmers. It involved stakeholder engagement, government collaboration, and the dissemination of awareness through various means, including collateral distribution and social media outreach adopting the help of the fiction character ‘Parivartan Prakash’, which aims to weave narratives that inspire positive change, foster awareness, and spark meaningful conversations around our initiatives.<br/><br/>
2. Krishi Yantra Saathi (KYS) App: A multi-lingual mobile application, KYS, was introduced, enabling farmers to access services and assistance from equipment owners seamlessly – from promoting awareness to conducting app-based surveys and ensuring efficient coordination among stakeholders. The Demand-Supply ecosystem for paddy stubble is orchestrated by identifying operators, assessing markets, and maintaining real-time updates on the KYS app. Additionally, a meticulous Result Monitoring and feedback Collection system is integrated, encompassing data collection, status reporting, and stakeholder feedback, contributing to a comprehensive and dynamic framework for successful project execution.<br/><br/>
<br/><br/>
The implemented interventions yielded remarkable results in mitigating Active Fire Locations (AFLs) in Haryana’s Jind and Kaithal districts. In 2023, the AFLs witnessed a substantial decline, reaching 335 in Jind from 505 in 2022 and reaching 270 from 668 in 2022 in Kaithal..</p>
<br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php } ?>
        <!--Project Details End-->

        <!--video One Start-->
        
        <!--video One End-->

         <!--Site Footer Start-->
<?php include('includes/footer.php'); ?>