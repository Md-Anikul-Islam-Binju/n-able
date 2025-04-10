<template>
    <header class="position-relative" style="height: 50vh; overflow: hidden;">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <img src="frontend/images/banner.jpeg" class="w-100 h-100 object-fit-cover img-fluid" alt="Background Image" loading="lazy">
        </div>

        <!-- Overlay with Text -->
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-column justify-content-center align-items-start text-white bg-dark bg-opacity-50 px-4">
            <div class="container">
                <h1 class="fw-bold text-center">CYBERSECURITY</h1>
            </div>
        </div>
    </header>




    <section class="section-ab-1 position-relative py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="frontend/images/page/page-1.webp"
                             alt="About N-able"
                             class="img-fluid rounded-4 shadow"
                             style="width: 650px; height: 400px; object-fit: cover;">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="section-heading-2 text-dark fw-bold">Cybersecurity</h1>
                    <p class="fw-bold">Traditional threat boundaries are vanishing. Cyberthreats are fast evolving.</p>
                    <p class="section-description text-muted">
                        The risk of cyber-attacks has intensified in recent years. Small and midsized businesses
                        have become the favorite target for cyber-attacks. And we ready to secure our customers
                        digitally
                    </p>
                    <ul class="text-muted mb-4">
                        <li>Endpoint Security</li>
                        <li>Network Security</li>
                        <li>Data Loss Prevention (DLP)</li>
                        <li>Privileged Access Management (PAM)</li>
                        <li>Application Security</li>
                        <li>SIEM (Security Information and Event Management)</li>
                        <li>SOC (Next Generation Security Operation Center)</li>
                        <li>Email & Spam Protection</li>
                        <li>Penetration Testing</li>
                        <li>Cloud Security</li>
                        <li>Vulnerability Management Service</li>
                        <li>Disaster Recovery</li>
                        <li>Managed Security Service</li>
                        <li>Advanced Threat Protection</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>



    <section class="section-gap grey-sec single-service-sec py-5">
        <div class="container">
            <h1 class="section-heading-2 text-center text-color mb-5 fw-bold">
                Our Solutions
            </h1>

            <div class="accordion" id="accordionExample">

                <!-- Accordion Item 1 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cyber Defence</h5>
                        </button>
                    </h2>
                    <div id="collapse-1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Critically evaluating through an application-centric lens, we build the required fortifications to protect your mission critical data and ensure continuous availability of your applications. We focus on ensuring that defences are continuously strengthened to ensure resilience against the evolving threat landscape while ensuring the frictionless experience to your customers and the distributed workforce. <br><br>
                                Application security <br><br>
                                Applications provide the gateway to your most important corporate asset – data. Digital transformation drives increased levels of digital interactions with your data over web and mobile channels. Defence in depth approach to building and exposing your applications, therefore, forms a central part of your cyber defence strategy. Our application security solutions help you to bring the required level of defences right from the design and build time all the way to the run time without compromising the friction-less experience demanded by your digital initiatives.
                            </p>
                            <h5 class="fw-bold">Application Security Testing services</h5>
                            <ul class="mb-4">
                                <li>Source code vulnerability assessments</li>
                                <li>Web Application Firewall solutions</li>
                                <li>Runtime Application Self Protection Solutions (RASP)</li>
                                <li>Database firewall services</li>
                                <li>Log correlation & analysis services</li>
                                <li>Secure API assessment services</li>
                                <li>API Security implementation services</li>
                            </ul>
                            <h5 class="fw-bold">Cloud & Infrastructure security</h5>
                            <p class="mb-4">
                                Your infrastructure defences form an integral layer of protecting your digital assets. In your efforts to accelerate your digital initiatives, moving towards adopting hybrid and multi-cloud architecture patterns becomes imperative. Therefore, your infrastructure defences must be re-evaluated and redesigned to pave way for you to reap the benefits of agility and innovation in the cloud. Our portfolio of mature infrastructure and cloud security solutions are designed and evolved to help you achieve and evolve with this transition.
                            </p>
                            <ul class="mb-4">
                                <li>Virtual Server & Container security solutions</li>
                                <li>Digital Rights management solutions</li>
                                <li>Data Classification & Data Leakage Prevention</li>
                                <li>End point Detection & Response solutions</li>
                                <li>Email Security solutions</li>
                                <li>Encryption Solutions</li>
                                <li>DNS Security solutions</li>
                                <li>Cloud Workload Protection services</li>
                                <li>Cloud Network Security services</li>
                                <li>Cloud Security Posture Management solutions</li>
                                <li>Cloud continuous compliance solutions</li>
                                <li>Cloud Application / SAAS Security solutions</li>
                                <li>Secure Access Service Edge (SASE) based solutions</li>
                            </ul>
                            <h5 class="fw-bold">Zero Trust resilience</h5>
                            <p class="mb-4">
                                Improving productivity and experience of accessing your IT resources for your hybrid workforce is an essential part of accelerating your digital transformation initiatives. Both admins and users should be free to work from anywhere using any device with minimal hassle. Supporting this in an evolving threat landscape requires a robust security model that verifies each user interaction explicitly, enforces least privilege and assumes a breach is imminent. Our Zero Trust resilience maturity model and associated set of solutions will help you assess your current maturity, define a roadmap in parallel to your digital transformation programme, and help you achieve the required level of resilience at critical milestones of your digital journey.
                            </p>
                            <ul class="mb-4">
                                <li>User Entity & Behavior Analytics services</li>
                                <li>Network Behavior Analytics services</li>
                                <li>Web/Email Isolation</li>
                                <li>Micro-segmentation</li>
                                <li>VPN Concentrators</li>
                                <li>Identity Governance solutions</li>
                                <li>Multifactor Authentication solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Digital Trust</h5>
                        </button>
                    </h2>
                    <div id="collapse-2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Establishing a strong identity perimeter, taking into consideration the risk and context of access, for your customers and workforce is an integral part of securing your digital estate. Strong authentication, least privilege access control and a strong identity governance backbone are critical elements of implementing a digital trust model for accessing your applications and data. We help you to develop and evolve a strong identity perimeter complementing your zero-trust resilience approach to ensure only authorized and intended access is allowed while not compromising on the frictionless user experience.
                            </p>
                            <ul class="mb-4">
                                <li>Identity and Access Management solutions</li>
                                <li>Identity Governance solutions</li>
                                <li>Privilege Access Management solutions</li>
                                <li>Multifactor Authentication solutions</li>
                                <li>Adaptive and Risk based authentication solutions</li>
                                <li>Biometric authentication & behavioural biometric solutions</li>
                                <li>Identity & Behavior Analytics services</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cyber Response</h5>
                        </button>
                    </h2>
                    <div id="collapse-3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                With all the layered fortifications you have, security incidents can creep in at any time from seemingly unexpected sources and what’s more, at the most unexpected times! A robust, tested and proven response strategy is mission critical. Our cyber response engineers can help you in each stage of a cyber response lifecycle from preparation, planning, testing, implementing and delivering actual response.
                            </p>
                            <ul class="mb-4">
                                <li>Cyber incident response planning services</li>
                                <li>Security Information & Event Management (SIEM) solutions</li>
                                <li>Automated response and remediation solutions</li>
                                <li>Digital Forensics services</li>
                                <li>Managed Security services</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cyber Assurancs</h5>
                        </button>
                    </h2>
                    <div id="collapse-4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Cyber defences implemented to fortify your digital estate, however much you evolve them to stand up to threat landscape, needs to be continuously verified to ensure they remain potent. Robust testing strategy to assure your cyber fortifications can withstand the modern and evolving threats followed by a remediation of gaps is a central part of our cyber resilience solution stack. Our proactive cyber assurance services are aimed at helping you to achieve this along your digital journey.
                            </p>
                            <ul class="mb-4">
                                <li>Penetration Testing services</li>
                                <li>Vulnerability management services</li>
                                <li>Malware Analysis services</li>
                                <li>Network Security Policy management services</li>
                                <li>Threat Intelligence augmentation solutions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 5 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cybersecurity Assurancs Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Cybersecurity Assurance Services are designed to fortify your organization’s digital infrastructure against evolving threats. By identifying vulnerabilities, assessing risks, and ensuring robust security measures, we help businesses safeguard their critical assets and maintain operational resilience. Our expertise ensures that your systems are prepared to handle emerging challenges, comply with industry standards, and stay secure in an increasingly complex digital landscape.
                            </p>
                            <ul class="mb-4">
                                <li>Vulnerability Assessments</li>
                                <li>Penetration Testing</li>
                                <li>Cybersecurity Breach Assessments</li>
                                <li>Security/Network/Virtual Infra Architecture Review</li>
                                <li>Mobile Application Security Assessment</li>
                                <li>Configurations Reviews</li>
                                <li>Code Reviewing</li>
                                <li>Building Policies, Procedures & Guidelines</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 6 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Digital Forensics & Incident Response Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Digital Forensics & Incident Response Services provide businesses with the expertise to effectively manage and respond to cybersecurity incidents. By identifying, analyzing and mitigating threats, we help minimize impact and ensure a swift recovery. Our comprehensive approach to digital forensics uncovers critical insights, enabling organizations to strengthen their defenses and maintain operational continuity in the face of evolving cyber challenges.
                            </p>
                            <ul class="mb-4">
                                <li>Incident response</li>
                                <li>Network forensics</li>
                                <li>Email forensics</li>
                                <li>Mobile device forensics</li>
                                <li>Computer forensics</li>
                                <li>Malware analysis</li>
                                <li>Data recovery</li>
                                <li>Threat hunting</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 7 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>Cyber Capacity Building Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Cyber Capacity Building Services are designed to strengthen your organization’s ability to recognize, respond to and mitigate cybersecurity threats. Through targeted training, awareness campaigns and simulations, we foster a security-conscious culture across teams. Our services empower businesses with the knowledge and skills needed to enhance resilience, adapt to evolving risks and maintain robust cybersecurity practices.
                            </p>
                            <ul class="mb-4">
                                <li>Phishing Simulations</li>
                                <li>Awareness Campaigns</li>
                                <li>Customized Information Security Training Programs</li>
                                <li>Information Security Vendor Trainings</li>
                                <li>Security Culture Assessments</li>
                                <li>Cyber Security Drills</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 8 -->
                <div class="accordion-item mb-3 border border-5 rounded-1 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed service-title" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
                            <img src="frontend/images/right-arrow.png" alt="icon" class="me-2" width="20">
                            <h5>GRC & Auditing Services</h5>
                        </button>
                    </h2>
                    <div id="collapse-8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p class="mb-4">
                                Technocare Orbit Governance, Risk and Compliance (GRC) & Auditing Services help businesses manage their organizational processes, minimize risks and ensure compliance with industry regulations. Through comprehensive governance frameworks and risk management strategies, we support businesses in maintaining compliance while addressing emerging challenges. Our auditing services assess security, network, infrastructure and configurations, offering detailed insights to ensure systems are secure, efficient, and compliant with established standards.
                            </p>
                            <h5 class="fw-bold">GRC</h5>
                            <ul>
                                <li>Governance</li>
                                <li>Risk Management</li>
                                <li>Compliance</li>
                            </ul>
                            <h5 class="fw-bold">Auditing</h5>
                            <ul>
                                <li>Security/Network/Virtual Infra Architecture</li>
                                <li>Configurations Audit</li>
                                <li>Code Audits</li>
                                <li>Compliance Auditing</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="consultation-section">
        <div class="container py-5">
            <div class="row">
                <!-- Left Side: Contact Info -->
                <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 60vh;">
                    <div>
                        <h1 class="fw-bold">Sign up for a consultation</h1>
                        <p>Our team of experts will get in touch with you to assist you on your journey.</p>
                    </div>
                </div>

                <!-- Right Side: Contact Form -->
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

</template>

<script>
import Layout from "../frontend/Layout.vue";

export default {
    name: "Cybersecurity",
    layout: Layout,
}
</script>

<style scoped>

</style>
