<?php

return [

//------------------------//
// SYSTEM SETTINGS
//------------------------//

    /**
     * Registration Needs Activation.
     * ยืนยันการสมัครสมาชิกทางอีเมล์
     * If set to true users will have to activate their accounts using email account activation.
     */
    'rna' => false,

    /**
     * Login With Email.
     * ล็อกอินด้วย อีเมล์
     * If set to true users will have to login using email/password combo.
     */
    'lwe' => false, 

    /**
     * Force Strong Password.
     *
     * If set to true users will have to use passwords with strength determined by StrengthValidator.
     */
    'fsp' => false,

    /**
     * Set the password reset token expiration time.
     * กำหนดวันหมดอายุของ session
     */
    'user.passwordResetTokenExpire' => 3600,

//------------------------//
// EMAILS
//------------------------//

    /**
     * Email used in contact form.
     * Users will send you emails to this address.
     * อีเมล์ของผู้ดูแลระบบ
     */
    'adminEmail' => 'admin@example.com', 

    /**
     * Not used in template.
     * You can set support email here.
     * อีเมล์ทีมสนับสนุน (support)
     */
    'supportEmail' => 'support@example.com',
];
