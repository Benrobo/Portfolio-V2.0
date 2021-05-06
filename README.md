# PortFolio_Website
Complete Portfolio Website with Bootstrap - HTML/CSS In this project, we are going to learn and build how to create a complete portfolio website with bootstrap using HTML and CSS. We will understand everything from scratch. 

<img src="https://github.com/Benrobo/Portfolio-V2.0/blob/main/img/portfolio_img/1616583688117.png">

## Task Completed

#### UI COMPONENT

--✅✅ Navigation Bar

--✅✅ Two left & right sideBar

--✅✅ Banner Section.

--✅✅ Services Section

--✅✅ Portfolio Section

--✅✅ Contact Info Section

--✅✅ Footer Section

### Functionlaities

--✅✅ Add Post functionality

--✅✅ Add User Authentication functionality

--✅✅ Add Img functionality

--✅✅ Display Post in table form from database functionality

--✅✅ Edit & Delete Posts

--✅✅ Feedback system

--✅✅ Mail Sending

### Third Party Library Used in this project.

<table>
<tr>
    <th>s/n</th>
    <th>name</th>
    <th>Description</th>
</tr>
<tr>
    <td>1</td>
    <td>PHPMailer</td>
    <td>PHPMailer's integrated SMTP client allows email sending on all platforms without needing a local mail server. </td>
</tr>
<tr>
    <td>2</td>
    <td>Sweet Alert. </td>
    <td>A BEAUTIFUL, RESPONSIVE, CUSTOMIZABLE, ACCESSIBLE (WAI-ARIA) REPLACEMENT FOR JAVASCRIPT'S POPUP BOXES ZERO DEPENDENCIES. </td>
</tr>
</table>

### Database Design
#### Table Relationship Design

<pre>
-- portfolio_tbl
    -- id
    -- title
    -- img
    -- contents
    -- likes_count
    -- date

--admin_profile
    -- id
    -- username
    -- pwd
    -- img
    -- date

---skills_tbl
    -- id
    -- img

-- feedbacks
    -- id
    -- username
    -- profession
    -- ratings
    -- comments
</pre>

====================== Sending Mail ============
--For you to be able to send email using php, i implemented the mail functionality using the PHPMailerw Library.

All you have  to do is install the libary using the below command.
<code>
    composer require phpmailer/phpmailer
</code>

Note: Composer must be installed on your system to enablef this command work.
