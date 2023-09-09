<script setup>
import LegalLayout from "@/Layouts/LegalLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <LegalLayout>
        <Head title="Terms" />
        <div>
            <h3>Terms & Conditions</h3>
            <small class="text-muted">
                Last updated Saturday 20th May, 2023
            </small>
            <p class="mt-3">
                Welcome to Chat by CJ ("the Application"). These Terms and
                Conditions ("Terms") govern your use of the Chat by CJ
                application and any related services provided by CJ Amanambu
                ("we," "us," or "our"). By accessing or using the Application,
                you agree to be bound by these Terms. If you do not agree with
                these Terms, you may not use the Application.
            </p>
            <h5>1. User Conduct</h5>
            <p>
                1.1. You must be at least 13 years old to use the Application.
                If you are between 13 and 18 years old, you must have the
                consent of a parent or legal guardian to use the Application.
            </p>
            <p>
                1.2. You are solely responsible for all content and messages you
                share through the Application. You agree not to use the
                Application to transmit or store any unlawful, threatening,
                defamatory, abusive, obscene, or otherwise objectionable
                content.
            </p>
            <p>
                1.3. You agree not to use the Application for any unauthorized
                or unlawful purposes, including but not limited to distributing
                unsolicited promotional or marketing material or engaging in any
                form of spamming.
            </p>
            <p>
                1.4. You agree not to interfere with or disrupt the
                functionality of the Application or its associated servers and
                networks. You must not attempt to gain unauthorized access to
                any part of the Application, its users' accounts, or any related
                systems or networks.
            </p>
            <h5>2. User Accounts</h5>
            <p>
                2.1. In order to use certain features of the Application, you
                may be required to create a user account. You agree to provide
                accurate and up-to-date information when creating an account and
                to keep your login credentials confidential.
            </p>
            <p>
                2.2. You are responsible for all activities that occur under
                your account. If you become aware of any unauthorized use of
                your account, you must notify us immediately.
            </p>
            <p>
                2.3. We reserve the right to suspend or terminate your account
                at any time, without prior notice or liability, for any reason,
                including but not limited to a violation of these Terms.
            </p>
            <h5>3. Privacy</h5>
            <p>
                3.1. We respect your privacy and handle your personal
                information in accordance with our
                <Link :href="route('legal.get.privacy')">Privacy Policy</Link>
                . By using the Application, you consent to the collection, use,
                and disclosure of your personal information as described in our
                <Link :href="route('legal.get.privacy')">Privacy Policy</Link>
                .
            </p>
            <h5>4. Intellectual Property</h5>
            <p>
                4.1. The Application and all associated content, including but
                not limited to text, graphics, logos, icons, images, audio
                clips, and software, are the property of CJ Technologies or its
                licensors and are protected by intellectual property laws.
            </p>
            <p>
                4.2. You may not modify, copy, distribute, transmit, display,
                perform, reproduce, publish, license, create derivative works
                from, transfer, or sell any content or materials obtained from
                the Application without our prior written consent.
            </p>
            <h5>5. Disclaimers and Limitations of Liability</h5>
            <p>
                5.1. The Application is provided on an "as is" and "as
                available" basis, without any warranties or representations,
                express or implied. We do not warrant that the Application will
                be error-free or uninterrupted, or that any defects will be
                corrected.
            </p>
            <p>
                5.2. To the maximum extent permitted by applicable law, we shall
                not be liable for any direct, indirect, incidental,
                consequential, or special damages arising out of or in
                connection with your use of the Application, including but not
                limited to damages for loss of profits, goodwill, use, data, or
                other intangible losses.
            </p>
            <h5>6. Indemnification</h5>
            <p>
                6.1. You agree to indemnify, defend, and hold harmless CJ
                Amanambu and its officers, directors, employees, and agents from
                and against any and all claims, liabilities, damages, losses,
                costs, expenses, or fees (including reasonable attorneys' fees)
                arising from your use of the Application or any violation of
                these Terms.
            </p>
            <h5>7. Modifications to the Terms</h5>
            <p>
                7.1. We reserve the right to modify these Terms at any time,
                without prior notice or liability. The updated Terms will be
                effective upon posting on the Application. By continuing to use
                the Application after the changes are made, you accept the
                updated Terms.
            </p>
            <h5>8. Governing Law and Jurisdiction</h5>
            <p>
                8.1. These Terms shall be governed by and construed in
                accordance with the laws of FCT, Nigeria. Any legal action or
                proceeding arising out of or in connection with these Terms
                shall be brought exclusively in the courts of FCT, Nigeria.
            </p>
            <h5>9. Severability</h5>
            <p>
                9.1. If any provision of these Terms is found to be unlawful,
                void, or unenforceable, that provision shall be deemed severable
                and shall not affect the validity and enforceability of any
                remaining provisions.
            </p>
            <h5>10. Entire Agreement</h5>
            <p>
                10.1. These Terms constitute the entire agreement between you
                and CJ Amanambu regarding the use of the Application and
                supersede all prior or contemporaneous agreements,
                understandings, or representations, whether oral or written.
            </p>
            <p>
                By using the Chat by CJ application, you acknowledge that you
                have read, understood, and agreed to these Terms and Conditions.
            </p>
        </div>
    </LegalLayout>
</template>
