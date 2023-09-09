<script setup>
import LegalLayout from "@/Layouts/LegalLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
</script>

<template>
    <LegalLayout>
        <Head title="Privacy" />
        <div>
            <h3>Privacy Policy</h3>
            <small class="text-muted"
                >Last updated Saturday 20th May, 2023</small
            >
            <p class="mt-3">
                This Privacy Policy ("Policy") explains how CJ Amanambu ("we,"
                "us," or "our") collects, uses, and protects the personal
                information of users ("you" or "your") when you use the Chat by
                CJ application ("Application"). We are committed to protecting
                your privacy and ensuring the security of your personal
                information. By using the Application, you consent to the
                collection and use of your personal information as described in
                this Policy.
            </p>
            <h5>1. Information We Collect</h5>
            <p>
                1.1. Personal Information: When you create an account or use the
                Application, we may collect personal information such as your
                name, email address, profile picture, and other information you
                provide to us.
            </p>
            <p>
                1.2. Log Data: We automatically collect certain information when
                you use the Application, including your IP address, device
                information, operating system, browser type, and usage data.
                This information is used for analytical purposes and to improve
                the functionality of the Application.
            </p>
            <p>
                1.3. Messages and Content: The messages and content you send and
                receive through the Application are stored on our servers to
                facilitate real-time communication and enable message history.
                We do not access or monitor the content of your messages unless
                required by law or to enforce our
                <Link :href="route('legal.get.terms')">Terms of Service</Link>
                .
            </p>
            <h5>2. Use of Information</h5>
            <p class="mb-0">
                2.1. We may use the personal information we collect for the
                following purposes:
            </p>
            <ul>
                <li>
                    To provide and maintain the Application's functionality and
                    features.
                </li>
                <li>
                    To personalize your experience and customize the content and
                    advertisements you see.
                </li>
                <li>
                    To communicate with you, respond to your inquiries, and
                    provide customer support.
                </li>
                <li>
                    To send you notifications, updates, and promotional
                    materials related to the Application, unless you opt out of
                    such communications.
                </li>
                <li>
                    To analyze usage trends, improve the Application, and
                    develop new features and services.
                </li>
                <li>
                    To enforce our
                    <Link :href="route('legal.get.terms')">
                        Terms of Service
                    </Link>
                    and protect the rights, property, or safety of CJ Amanambu,
                    our users, or others.
                </li>
            </ul>
            <p>
                2.2. We may aggregate and anonymize data for statistical or
                analytical purposes, which cannot be used to identify you
                personally.
            </p>
            <h5>3. Information Sharing</h5>
            <p class="mb-0">
                3.1. We do not sell, trade, or rent your personal information to
                third parties without your consent. However, we may share your
                information with:
            </p>
            <ul>
                <li>
                    Service Providers: We may engage trusted third-party service
                    providers to assist us in operating the Application and
                    provide services on our behalf, such as hosting, analytics,
                    and customer support. These providers are bound by
                    confidentiality obligations and are prohibited from using
                    your information for any other purpose.
                </li>
                <li>
                    Compliance with Laws: We may disclose your information if
                    required by law or if we believe that such disclosure is
                    necessary to comply with a legal obligation, protect our
                    rights or the rights of others, investigate fraud, or ensure
                    the safety of users.
                </li>
            </ul>
            <h5>4. Data Security</h5>
            <p>
                4.1. We implement appropriate technical and organizational
                measures to protect your personal information from unauthorized
                access, loss, misuse, or alteration. However, no data
                transmission over the internet or electronic storage method is
                100% secure. Therefore, while we strive to protect your
                information, we cannot guarantee its absolute security.
            </p>
            <h5>5. Your Rights</h5>
            <p class="mb-0">
                5.1. You have certain rights regarding your personal
                information, including the right to:
            </p>
            <ul>
                <li>
                    Access, update, or delete your personal information by
                    contacting us.
                </li>
                <li>
                    Object to or restrict the processing of your personal
                    information.
                </li>
                <li>
                    Withdraw your consent to the processing of your personal
                    information.
                </li>
            </ul>
            <h5>6. Third-Party Links and Services</h5>
            <p>
                6.1. The Application may contain links to third-party websites
                or services. This Privacy Policy does not apply to those
                third-party websites or services. We encourage you to review the
                privacy policies of those third parties before providing any
                personal information.
            </p>
            <h5>7. Children's Privacy</h5>
            <p>
                7.1. The Application is not intended for children under the age
                of 13. We do not knowingly collect personal information from
                children under 13. If we become aware that we have inadvertently
                collected personal information from a child under 13 without
                parental consent, we will take steps to delete the information
                as soon as possible.
            </p>
            <h5>8. Changes to the Privacy Policy</h5>
            <p>
                8.1. We reserve the right to modify this Privacy Policy at any
                time, without prior notice, by posting the updated version on
                the Application. Your continued use of the Application after the
                changes are made constitutes your acceptance of the updated
                Policy.
            </p>
            <h5>9. Contact Us</h5>
            <p>
                9.1. If you have any questions, concerns, or requests regarding
                this Privacy Policy or the processing of your personal
                information, please contact us at
                <a href="mailto:admin@cjamanambu.com">admin@cjamanambu.com</a>.
            </p>
            <p>
                By using the Chat by CJ application, you acknowledge that you
                have read, understood, and agreed to this Privacy Policy.
            </p>
        </div>
    </LegalLayout>
</template>
