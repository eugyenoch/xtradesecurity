<?php
include '../function.php';
checkAdminLogin();

// Fetch admin details from the database
$adminEmail = $_SESSION['admin_session'];
$stmt = $con->prepare("SELECT firstname, lastname, phone, userName, address, city, country, phone, photo, reg_date FROM admin WHERE user_email = ?");
$stmt->bind_param("s", $adminEmail);
$stmt->execute();
$stmt->bind_result($firstname, $lastname, $phone, $userName, $address, $city, $country, $phone, $photoPath, $reg_date);
$stmt->fetch();
$stmt->close();
$con->close();

// Set the URL of the profile picture
$profilePicUrl = !empty($photoPath) ? $photoPath : '';

?>
<!DOCTYPE html>
<html lang="en">
<?php include "include/header.php"; ?>

  <body class="body header-fixed">
    <!-- Header -->
    <header id="header_main" class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="header__body d-flex justify-content-between">
              <div class="header__left">
              <?php include "../include/logo.php"; ?>
                <div class="left__main">
                <?php include "include/nav.php";?>
                  <!-- /#main-nav -->
                </div>
              </div>

              <?php include "include/headerRight.php";?>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end Header -->

    <!-- PageTitle -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="heading">Admin Profile</h3>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumb">
              <li><a href="../index.php">Home</a></li>
              <li><p class="fs-18">/</p></li>
              <li><p class="fs-18">User</p></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End PageTitle -->

    <section class="user-profile flat-tabs">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-12">
            <div class="user-info center">
              <form action="upload-profile-picture.php" method="post" enctype="multipart/form-data">
                
              <div class="avt">
              <img id="blah" src="<?php echo htmlspecialchars($profilePicUrl); ?>" alt="no file" title="Admin profile photo" /> 
                <input type="file" class="custom-file-input" accept="image/*" id="imgInp" name="profilePic" title="Select an image" /> 
              </div>
              <input type="submit" class="btn" name="upload" value="Upload" title="Upload image" /> 
            </form>
              <h6 class="name"><?php if(isset($firstname) && isset($firstname)){echo $firstname .'&nbsp;'.$lastname;} ?></h6>
              <p><?php if(isset($adminEmail)){echo 'Email:&nbsp;'. $adminEmail;} ?></p>
              <p><?php if(isset($reg_date)){echo 'Registered:&nbsp;'.$reg_date;} ?></p>
            </div>
            <ul class="menu-tab">
              <li class="active">
                <h6 class="fs-16">
                  <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M10.2766 12.854C10.2994 12.854 10.3221 12.854 10.3495 12.854C10.3586 12.854 10.3677 12.854 10.3768 12.854C10.3905 12.854 10.4087 12.854 10.4224 12.854C11.7572 12.8312 12.8369 12.362 13.6342 11.4645C15.3881 9.48733 15.0966 6.09787 15.0647 5.77441C14.9508 3.3462 13.8027 2.18449 12.8551 1.64236C12.149 1.2369 11.3244 1.01822 10.4041 1H10.3723C10.3677 1 10.3586 1 10.354 1H10.3267C9.82101 1 8.82786 1.082 7.87571 1.62414C6.91901 2.16627 5.75274 3.32798 5.63885 5.77441C5.60696 6.09787 5.31539 9.48733 7.06935 11.4645C7.86205 12.362 8.94176 12.8312 10.2766 12.854ZM6.85523 5.8883C6.85523 5.87464 6.85978 5.86097 6.85978 5.85186C7.01012 2.5854 9.32899 2.2346 10.3221 2.2346H10.3404C10.3495 2.2346 10.3631 2.2346 10.3768 2.2346C11.6069 2.26194 13.6979 2.76307 13.8392 5.85186C13.8392 5.86552 13.8392 5.87919 13.8437 5.8883C13.8483 5.92019 14.1672 9.01809 12.7185 10.649C12.1444 11.296 11.3791 11.6149 10.3723 11.624C10.3631 11.624 10.3586 11.624 10.3495 11.624C10.3404 11.624 10.3358 11.624 10.3267 11.624C9.32444 11.6149 8.55452 11.296 7.98505 10.649C6.54088 9.02721 6.85067 5.91564 6.85523 5.8883Z"
                      fill="white" stroke="white" stroke-width="0.4" />
                    <path
                      d="M19.7116 18.4778C19.7116 18.4733 19.7116 18.4687 19.7116 18.4642C19.7116 18.4277 19.7071 18.3913 19.7071 18.3503C19.6797 17.4482 19.6205 15.3389 17.6433 14.6647C17.6297 14.6601 17.6114 14.6556 17.5978 14.651C15.5431 14.1271 13.8347 12.9426 13.8165 12.9289C13.5386 12.733 13.1559 12.8014 12.96 13.0793C12.7641 13.3572 12.8325 13.7399 13.1104 13.9358C13.1878 13.9904 15.001 15.2524 17.2697 15.8355C18.3312 16.2136 18.4497 17.348 18.4816 18.3867C18.4816 18.4277 18.4816 18.4642 18.4861 18.5006C18.4907 18.9106 18.4633 19.5439 18.3905 19.9083C17.6524 20.3274 14.7595 21.7762 10.3587 21.7762C5.9761 21.7762 3.06499 20.3229 2.3224 19.9038C2.24951 19.5393 2.21762 18.9061 2.22673 18.496C2.22673 18.4596 2.23129 18.4232 2.23129 18.3822C2.26318 17.3434 2.38163 16.2091 3.44311 15.8309C5.71186 15.2478 7.52504 13.9813 7.60249 13.9312C7.88039 13.7353 7.94873 13.3526 7.75283 13.0747C7.55693 12.7968 7.17425 12.7285 6.89635 12.9244C6.87813 12.9381 5.17884 14.1225 3.1151 14.6464C3.09688 14.651 3.08321 14.6556 3.06954 14.6601C1.09235 15.3389 1.03313 17.4482 1.0058 18.3457C1.0058 18.3867 1.0058 18.4232 1.00124 18.4596C1.00124 18.4642 1.00124 18.4687 1.00124 18.4733C0.996684 18.7102 0.992129 19.9265 1.23358 20.537C1.27914 20.6555 1.36114 20.7557 1.47048 20.824C1.60715 20.9151 4.88272 23.0017 10.3633 23.0017C15.8438 23.0017 19.1194 20.9106 19.256 20.824C19.3608 20.7557 19.4474 20.6555 19.4929 20.537C19.7207 19.9311 19.7162 18.7147 19.7116 18.4778Z"
                      fill="white" stroke="white" stroke-width="0.4" />
                  </svg>
                  User Profile
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                  <svg
                    width="21"
                    height="22"
                    viewBox="0 0 21 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.9999 14.0005C16.3708 14.002 15.7509 14.1522 15.191 14.439C14.631 14.7257 14.1468 15.1409 13.7779 15.6505L8.76289 12.3075C9.07893 11.4648 9.07893 10.5362 8.76289 9.6935L13.7779 6.3505C14.3408 7.11364 15.1574 7.65103 16.0809 7.86613C17.0045 8.08123 17.9745 7.95995 18.8166 7.52406C19.6588 7.08817 20.3179 6.36626 20.6756 5.48802C21.0332 4.60979 21.066 3.63279 20.7679 2.73257C20.4699 1.83235 19.8606 1.06791 19.0496 0.576596C18.2385 0.0852811 17.2788 -0.100704 16.3429 0.0520557C15.407 0.204815 14.5563 0.686306 13.9435 1.41002C13.3308 2.13374 12.9962 3.05224 12.9999 4.0005C13.0064 4.14622 13.0211 4.29145 13.0439 4.4355L7.65289 8.0295C7.07837 7.51159 6.36602 7.17137 5.6021 7.05003C4.83818 6.92869 4.05546 7.03144 3.34874 7.34584C2.64202 7.66024 2.04162 8.17281 1.62025 8.82145C1.19888 9.4701 0.974609 10.227 0.974609 11.0005C0.974609 11.774 1.19888 12.5309 1.62025 13.1796C2.04162 13.8282 2.64202 14.3408 3.34874 14.6552C4.05546 14.9696 4.83818 15.0723 5.6021 14.951C6.36602 14.8296 7.07837 14.4894 7.65289 13.9715L13.0439 17.5655C13.0211 17.7096 13.0064 17.8548 12.9999 18.0005C12.9999 18.7916 13.2345 19.565 13.674 20.2228C14.1135 20.8806 14.7383 21.3933 15.4692 21.696C16.2001 21.9988 17.0043 22.078 17.7803 21.9236C18.5562 21.7693 19.2689 21.3883 19.8283 20.8289C20.3877 20.2695 20.7687 19.5568 20.923 18.7809C21.0774 18.0049 20.9982 17.2007 20.6954 16.4698C20.3927 15.7389 19.88 15.1142 19.2222 14.6746C18.5644 14.2351 17.791 14.0005 16.9999 14.0005ZM16.9999 2.0005C17.3955 2.0005 17.7821 2.1178 18.111 2.33756C18.4399 2.55733 18.6963 2.86969 18.8477 3.23514C18.999 3.60059 19.0386 4.00272 18.9615 4.39068C18.8843 4.77865 18.6938 5.13501 18.4141 5.41472C18.1344 5.69442 17.778 5.8849 17.3901 5.96207C17.0021 6.03925 16.6 5.99964 16.2345 5.84826C15.8691 5.69689 15.5567 5.44054 15.337 5.11164C15.1172 4.78275 14.9999 4.39607 14.9999 4.0005C14.9999 3.47007 15.2106 2.96136 15.5857 2.58629C15.9608 2.21122 16.4695 2.0005 16.9999 2.0005ZM4.99989 13.0005C4.60432 13.0005 4.21764 12.8832 3.88875 12.6634C3.55985 12.4437 3.3035 12.1313 3.15213 11.7659C3.00075 11.4004 2.96114 10.9983 3.03832 10.6103C3.11549 10.2224 3.30597 9.866 3.58567 9.58629C3.86538 9.30659 4.22174 9.1161 4.60971 9.03893C4.99767 8.96176 5.3998 9.00137 5.76525 9.15274C6.13071 9.30412 6.44306 9.56047 6.66283 9.88936C6.88259 10.2183 6.99989 10.6049 6.99989 11.0005C6.99989 11.5309 6.78917 12.0396 6.4141 12.4147C6.03903 12.7898 5.53032 13.0005 4.99989 13.0005ZM16.9999 20.0005C16.6043 20.0005 16.2177 19.8832 15.8888 19.6634C15.5599 19.4437 15.3035 19.1313 15.1521 18.7659C15.0008 18.4004 14.9612 17.9983 15.0383 17.6103C15.1155 17.2224 15.306 16.866 15.5857 16.5863C15.8654 16.3066 16.2218 16.1161 16.6097 16.0389C16.9977 15.9618 17.3998 16.0014 17.7653 16.1527C18.1307 16.3041 18.4431 16.5605 18.6628 16.8894C18.8826 17.2183 18.9999 17.6049 18.9999 18.0005C18.9999 18.5309 18.7892 19.0396 18.4141 19.4147C18.039 19.7898 17.5303 20.0005 16.9999 20.0005Z"
                      fill="#3772FF"
                    />
                  </svg>
                  Referrals
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M22.7031 12C22.7031 11.0752 22.5852 10.1602 22.3522 9.27366L23.7069 8.27705L21.0776 3.72291L19.5348 4.39884C18.2158 3.08925 16.6007 2.15602 14.815 1.67166L14.6293 0H9.37059L9.18487 1.67166C7.39912 2.15602 5.78404 3.08925 4.46508 4.39884L2.92233 3.72291L0.292969 8.27705L1.64766 9.27366C1.41469 10.1602 1.29684 11.0752 1.29684 12C1.29684 12.9248 1.41473 13.8397 1.64766 14.7263L0.292969 15.7229L2.92233 20.277L4.46508 19.6011C5.78409 20.9108 7.39917 21.844 9.18487 22.3283L9.37059 24H14.6293L14.815 22.3283C16.6008 21.844 18.2159 20.9107 19.5348 19.6011L21.0776 20.277L23.7069 15.7229L22.3522 14.7263C22.5852 13.8397 22.7031 12.9248 22.7031 12ZM14.0184 21.0765L13.5271 21.1853L13.3706 22.5938H10.6293L10.4728 21.1853L9.98146 21.0765C8.1187 20.6643 6.44794 19.6989 5.14987 18.2849L4.81003 17.9147L3.51084 18.4839L2.14017 16.1098L3.28041 15.271L3.12966 14.7916C2.84662 13.8913 2.70309 12.952 2.70309 12C2.70309 11.0479 2.84662 10.1087 3.12966 9.20841L3.28041 8.72897L2.14017 7.89019L3.51084 5.51611L4.81003 6.08531L5.14987 5.71509C6.44794 4.30106 8.1187 3.33572 9.98146 2.92345L10.4728 2.8147L10.6293 1.40625H13.3706L13.5271 2.8147L14.0184 2.92345C15.8812 3.33577 17.552 4.30111 18.85 5.71509L19.1899 6.08531L20.4891 5.51611L21.8597 7.89019L20.7195 8.72897L20.8702 9.20841C21.1533 10.1087 21.2968 11.048 21.2968 12C21.2968 12.952 21.1533 13.8913 20.8702 14.7916L20.7195 15.271L21.8597 16.1098L20.4891 18.4839L19.1899 17.9147L18.85 18.2849C17.552 19.6989 15.8812 20.6643 14.0184 21.0765Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M9.20821 10.3902L8.20354 9.40625L5.63184 12.0321L8.25777 14.6038L9.24168 13.5991L7.62046 12.0114L9.20821 10.3902Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M14.7913 10.3902L16.379 12.0114L14.7578 13.5991L15.7417 14.6038L18.3677 12.0321L15.796 9.40625L14.7913 10.3902Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                    <path
                      d="M10.3169 16.6016L12.3168 7.09721L13.6936 7.3869L11.6937 16.8913L10.3169 16.6016Z"
                      fill="#3772FF"
                      stroke="#3772FF"
                      stroke-width="0.5"
                    />
                  </svg>

                  API keys
                </h6>
              </li>

              <li>
                <h6 class="fs-16">
                  <svg width="24" height="20" viewBox="0 0 24 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M4.20008 0H0.600074C0.268726 0 0 0.268726 0 0.600074V4.20008C0 4.53142 0.268726 4.80015 0.600074 4.80015C0.931421 4.80015 1.19993 4.53142 1.19993 4.20008V1.20015H4.20008C4.53142 1.20015 4.79993 0.931422 4.79993 0.600074C4.79993 0.268726 4.53142 0 4.20008 0Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M4.20008 17.9984H1.19993V14.9985C1.19993 14.6672 0.931421 14.3984 0.600074 14.3984C0.268726 14.3984 0 14.6672 0 14.9985V18.5985C0 18.9299 0.268726 19.1986 0.600074 19.1986H4.20008C4.53142 19.1986 4.79993 18.9299 4.79993 18.5985C4.79993 18.2672 4.53142 17.9984 4.20008 17.9984Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M23.3998 0H19.7998C19.4684 0 19.1997 0.268726 19.1997 0.600074C19.1997 0.931422 19.4684 1.20015 19.7998 1.20015H22.7997V4.20008C22.7997 4.53142 23.0684 4.80015 23.3998 4.80015C23.7311 4.80015 23.9998 4.53142 23.9998 4.20008V0.600074C23.9998 0.268726 23.7311 0 23.3998 0Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M23.3998 14.3984C23.0684 14.3984 22.7997 14.6672 22.7997 14.9985V17.9984H19.7998C19.4684 17.9984 19.1997 18.2672 19.1997 18.5985C19.1997 18.9299 19.4684 19.1986 19.7998 19.1986H23.3998C23.7311 19.1986 23.9998 18.9299 23.9998 18.5985V14.9985C23.9998 14.6672 23.7311 14.3984 23.3998 14.3984Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M3.64988 3.60156H4.95012C5.3091 3.60156 5.6 3.87029 5.6 4.20164V15.0016C5.6 15.333 5.3091 15.6017 4.95012 15.6017H3.64988C3.2909 15.6017 3 15.333 3 15.0016V4.20164C3 3.87029 3.2909 3.60156 3.64988 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M7.90007 3.60156C7.51347 3.60156 7.2002 3.87029 7.2002 4.20164V15.0016C7.2002 15.333 7.51347 15.6017 7.90007 15.6017C8.28666 15.6017 8.6002 15.333 8.6002 15.0016V4.20164C8.6002 3.87029 8.28666 3.60156 7.90007 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M11.1501 3.60156H12.4499C12.8089 3.60156 13.1 3.87029 13.1 4.20164V15.0016C13.1 15.333 12.8089 15.6017 12.4499 15.6017H11.1501C10.7911 15.6017 10.5 15.333 10.5 15.0016V4.20164C10.5 3.87029 10.7911 3.60156 11.1501 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M15.4998 3.60156C15.1133 3.60156 14.7998 3.87029 14.7998 4.20164V15.0016C14.7998 15.333 15.1133 15.6017 15.4998 15.6017C15.8863 15.6017 16.1998 15.333 16.1998 15.0016V4.20164C16.1998 3.87029 15.8863 3.60156 15.4998 3.60156Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M18.6501 3.60156H19.9499C20.3089 3.60156 20.6 3.87029 20.6 4.20164V15.0016C20.6 15.333 20.3089 15.6017 19.9499 15.6017H18.6501C18.2911 15.6017 18 15.333 18 15.0016V4.20164C18 3.87029 18.2911 3.60156 18.6501 3.60156Z"
                      fill="#3772FF"
                    />
                  </svg>

                  2FA
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M17 8.00002V7.00003C17 3.141 13.86 0 9.99999 0C6.13997 0 3 3.141 3 6.99998V7.99997C1.34602 7.99997 0 9.34598 0 11V21C0 22.654 1.34602 24 3 24H17C18.654 24 20 22.654 20 21V11C20 9.34598 18.654 8.00002 17 8.00002ZM4.99997 6.99998C4.99997 4.24298 7.24299 1.99997 9.99999 1.99997C12.757 1.99997 15 4.24298 15 6.99998V7.99997H4.99997V6.99998ZM18 21C18 21.552 17.551 22 17 22H3C2.44899 22 2.00002 21.552 2.00002 21V11C2.00002 10.448 2.44903 10 3 10H17C17.551 10 18 10.448 18 11V21Z"
                      fill="#3772FF"
                    />
                    <path
                      d="M10 11.5C8.34602 11.5 7 12.846 7 14.5C7 15.802 7.83902 16.902 9.00002 17.316V19C9.00002 19.553 9.448 20 10 20C10.552 20 11 19.553 11 19V17.316C12.161 16.902 13 15.802 13 14.5C13 12.846 11.654 11.5 10 11.5ZM10 15.5C9.44898 15.5 9.00002 15.052 9.00002 14.5C9.00002 13.948 9.44898 13.5 10 13.5C10.551 13.5 11 13.948 11 14.5C11 15.052 10.551 15.5 10 15.5Z"
                      fill="#3772FF"
                    />
                  </svg>
                  Change password
                </h6>
              </li>

              <li>
                <h6 class="fs-16">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <g fill="#3772FF">
                  <path d="M15.2 2.7c-2.6 0-4.9 1.1-6.6 2.8C6.4 7.2 5.3 9.5 5.3 12.1c0 1 .1 1.9.4 2.8L2 18.6l2.5 2.5 2.3-2.3c.8.3 1.8.4 2.7.4 2.6 0 4.9-1.1 6.6-2.8s2.8-4 2.8-6.6-1.1-4.9-2.8-6.6c-1.7-1.7-4-2.8-6.6-2.8zm0 14c-1.8 0-3.4-.7-4.6-2-1.2-1.2-2-2.8-2-4.6 0-1.8.7-3.4 2-4.6 1.2-1.2 2.8-2 4.6-2 1.8 0 3.4.7 4.6 2 1.2 1.2 2 2.8 2 4.6 0 1.8-.7 3.4-2 4.6-1.2 1.2-2.8 2-4.6 2zm-1.5-6.5c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zM6.3 17.8L3.5 20.6l-1.1-1.1 2.8-2.8c-.3-.4-.5-.9-.5-1.4s.2-1 .5-1.4c.4-.4.9-.5 1.4-.5s1 .2 1.4.5c.4.4.5.9.5 1.4s-.2 1-.5 1.4z"/>
                  </g>
                </svg>
                  Addresses
                </h6>
              </li>

              <li>
                <h6 class="fs-16">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <g fill="#3772FF">
                          <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4v-6h16v6zm0-8H4V6h16v4zm-4 2h-8v2h8v-2z"/>
                          </g>
                        </svg>
                  change Wallet
                </h6>
              </li>
              <li>
                <h6 class="fs-16">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                          <g fill="#3772FF">
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5S14.757 2 12 2zm0 8c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3z"/>
                            <path d="M12 14c-3.86 0-7 3.14-7 7 0 .552.447 1 1 1h12c.553 0 1-.448 1-1 0-3.86-3.14-7-7-7zm-5.924 6c.458-2.318 2.578-4 5.924-4s5.466 1.682 5.924 4H6.076z"/>
                          </g>
                        </svg>
                  Add new admin
                </h6>
              </li>
            </ul>
          </div>
          <div class="col-xl-9 col-md-12">
            <div class="content-tab">
              <div class="content-inner profile">
                <form action="update-profile.php" method="post" name="adminEditProfileForm">
                  <h4>User Profile</h4>
                  <h6>View and edit your profile infomation</h6>
                  <div class="form-group d-flex s1">
                    <input type="text" class="form-control" name="firstname" value="<?php if(isset($firstname)){echo $firstname;} ?>" placeholder="Firstname" />
                    <input type="text" class="form-control" name="lastname" value="<?php if(isset($lastname)){echo $lastname;} ?>" placeholder="Lastname" />
                    <!-- <input type="text" class="form-control" id="exampleInputEmail1" value="<?php if(isset($userName)){echo $userName;} ?>" placeholder="username" /> -->
                  </div>
                  <div class="form-group d-flex s1">
                    <input type="text" class="form-control" name="userName" id="exampleInputEmail1" value="<?php if(isset($userName)){echo $userName;} ?>" placeholder="username" />
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?php if(isset($adminEmail)){echo $adminEmail;} ?>" title="This field cannot be edited" placeholder="email" disabled />
                    
                  </div>
                  <div class="form-group d-flex s1">
                   <div class="sl">
                      <!-- <select class="form-control" id="exampleFormControlSelect1" name="dialCode">
                        <?php //include "../include/selectDialingCode.html";?>
                      </select> -->
                      <input type="tel" class="form-control" name="phone" value="<?php if(isset($phone)){echo $phone;} ?>" placeholder="Your Phone number" />
                      <br><small>If you must fill out this field, then you must fill in this format (e.g +XXXXXXXXXXXXX)</small>
                    </div>
                  </div>

                  <div class="form-group d-flex">
                    <select class="form-control" id="exampleFormControlSelect2" name="country">
                    <?php include "../include/selectCountry.html";?>
                    </select>
                    <div class="sl">
                    <input type="text" class="form-control" value="<?php if(isset($city)){echo $city;} ?>" name="city" placeholder="Your state or region" />
                      
                    </div>
                    <input class="form-control" placeholder="address" name="address" type="text" value="<?php if(isset($address)){echo $address;} ?>" />
                  </div>

                  <h6 class="two">Features (in Beta)</h6>
                  <div class="bt d-flex">
                    <div class="left">
                      <h6>level 1</h6>
                      <ul>
                        <li>
                          <p>Deposit assets</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                        <li>
                          <p>Withdraw assets</p>
                          <p class="text">Enabled $1,000/day</p>
                        </li>
                        <li>
                          <p>Card purchases</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                        <li>
                          <p>Bank deposit</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                      </ul>
                    </div>
                    <div class="right">
                      <h6>level 2</h6>
                      <ul>
                        <li>
                          <p>Fiat and Spot wallet</p>
                          <input type="checkbox" class="check-box__switcher" checked />
                        </li>
                        <li>
                          <p>Margin wallet</p>
                          <p class="text">Enabled 100x Leverage</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <button type="submit" class="btn-action" name="updateProfile"> Update Profile</button>
                </form>
              </div>
              <div class="content-inner referrals">
                <h6>Total rewards</h6>
                <h4>0.00<span>&nbsp;USD</span></h4>
                <p>
                  You're earning 20% of the trading fees your referrals pay.
                  <a href="../affiliate-policy.php">Learn more</a>
                </p>
                <div class="main">
                  <h6>Affiliate program is not open to admins</h6>
                  <div class="refe">
                    <div>
                      <p>Referral link</p>
                      <input class="form-control" type="text" value="https://xtradesecurity.com/" disabled />
                    </div>
                    <div>
                      <p>Referral code</p>
                      <input class="form-control" type="text" value="N84CRDKK" />
                      <span class="btn-action">Copy</span>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                <span>View and add wallets and wallet addresses&nbsp;<a href="addresses.php" class="">Wallet operations</a></span>
                </div>
              </div>
              <div class="content-inner api">
                <h6>Enable API access on your account to generate keys (Coming soon).</h6>
                <h4>API Access is <span>Disabled</span></h4>
                <p class="mail">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M20 5H4C3.44772 5 3 5.44772 3 6V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V6C21 5.44772 20.5523 5 20 5ZM4 3C2.34315 3 1 4.34315 1 6V18C1 19.6569 2.34315 21 4 21H20C21.6569 21 23 19.6569 23 18V6C23 4.34315 21.6569 3 20 3H4Z"
                      fill="#23262F"
                    />
                    <path
                      fill-rule="evenodd"
                      clip-rule="evenodd"
                      d="M5.2318 7.35984C5.58537 6.93556 6.21593 6.87824 6.64021 7.2318L11.3598 11.1648C11.7307 11.4739 12.2694 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9206 12.7013C12.808 13.6284 11.192 13.6284 10.0795 12.7013L5.35984 8.76825C4.93556 8.41468 4.87824 7.78412 5.2318 7.35984Z"
                      fill="#23262F"
                    />
                  </svg>
                  <?php if(isset($adminEmail)){echo $adminEmail;} ?>
                </p>
                <div class="main">
                  <h6>Enable API keys</h6>
                  <p>Enter your password and 2FA code to Enable the API keys</p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input
                        class="form-control"
                        type="password"
                        placeholder="Password"
                      />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="2FA code"
                      />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Enable API keys</a>
                </div>
              </div>

              <div class="content-inner api">
                <h4>2FA <span class="color-success">Enabled</span></h4>
                <p>
                  If you want to turn off 2FA, input your account password and
                  the six-digit code provided by the Google Authenticator app
                  below, then click <strong>"Disable 2FA"</strong>.
                </p>

                <div class="main">
                  <h6>Disable 2FA</h6>
                  <p>
                    Enter your password and 2FA code to Disable the 2FA
                    verification
                  </p>

                  <div class="refe">
                    <div class="form-group">
                      <p>Your Password</p>
                      <input
                        class="form-control"
                        type="password"
                        placeholder="Password"
                      />
                    </div>
                    <div class="form-group">
                      <p>2FA Code</p>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="2FA code"
                      />
                    </div>
                  </div>
                  <a href="#" class="btn-action">Disable 2FA verification</a>
                </div>
              </div>
              <div class="content-inner profile change-pass">
                <h4>Change Password</h4>
                <h6>Use this form to change your password to a new one</h6>
                <form action="change-password.php" method="post" name="adminChangePasswordForm">
                  <div class="form-group">
                    <div>
                      <label>Old Password<span>*</span>:</label>
                      <input type="password" class="form-control"  placeholder="old password" name="oldPassword" required />
                    </div>
                    <div>
                      <label>2FA Code<span>*</span>:</label>
                      <input type="text" class="form-control" value="<?php echo mt_rand();?>" disabled />
                    </div>
                  </div>
                  <div class="form-group">
                    <div>
                      <label>New Password<span>*</span>:</label>
                      <input type="password" class="form-control" placeholder="new password"  name="newPassword" required />
                    </div>
                    <div>
                      <label>Confirm Password<span>*</span>:</label>
                      <input type="password" class="form-control" placeholder="confirm password"  name="confirmPassword" required />
                    </div>
                  </div>
                  <button type="submit" class="btn-action" name="changePassword">Change Password</button>
                </form>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-sale">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="block-text">
              <h4 class="heading">User Management Center</h4>
              <p class="desc">
                Visit the user management center to manage users and user information
              </p>
            </div>
          </div>
          <div class="col-md-5">
            <div class="button">
              <a href="#">User Management</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <?php include "../include/footer.php"; ?>

    <script src="../app/js/aos.js"></script>
    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/js/jquery.easing.js"></script>
    <script src="../app/js/popper.min.js"></script>
    <script src="../app/js/bootstrap.min.js"></script>
    <script src="../app/js/app.js"></script>
    <script src="../app/js/jquery.peity.min.js"></script>

    <script src="../app/js/switchmode.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

    <script src="../app/js/datepickerpluigin.js"></script>
    <script src="../app/js/datepicker.js"></script>

    <!--Toastr-->
    <script type="text/javascript" src="../app/js/toastr.min.js"></script>

    <script>
      imgInp.onchange = (evt) => {
        const [file] = imgInp.files;
        if (file) {
          blah.src = URL.createObjectURL(file);
        }
      };
      function Convert() {
        let dollarInput = document.getElementByClass("dollar").value;
        let bitcoinInput = document.getElementByClass("bitcoin").value;

        if ((dollarInput != "") & (bitcoinInput == "")) {
          let parsedDollar = parseFloat(dollarInput);
          let fromDollarToBitcoin = parsedDollar * 0.000022;

          let output = document.getElementByClass("bitcoin");
          output.value = fromDollarToBitcoin;
          console.log("Bitcoin", fromDollarToBitcoin);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput != "") & (dollarInput == "")) {
          let parsedBitcoin = parseFloat(bitcoinInput);
          let fromBitcoinToDollar = parsedBitcoin * 46403.5;

          let output = document.getElementByClass("dollar");
          output.value = fromBitcoinToDollar;
          console.log("US$", fromBitcoinToDollar);

          clearMessage();
          clearAlert();
        }

        if ((bitcoinInput == "") & (dollarInput == "")) {
          showMessage();
        }
      }
    </script>
  </body>
</html>
<?php
        if(isset($toast)){
        if($toast==='success'){
          echo "<script>toastr.success('You will be redirected shortly', 'Success')</script>";
        }

        if($toast==='fail'){
          echo "<script>toastr.error('We cannot log you in', 'Wrong credentials')</script>";
        }
      }
        ?>