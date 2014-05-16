@extends('layouts.master');

@section('content')
<div class="row">
    <div class="col-sm-2 col-sm-offset-1">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="{{ URL::to('about-us') }}">About Us</a></li>
            <li><a href="{{ URL::to('/') }}">Vision and Mission</a></li>
            <li><a href="{{ URL::to('our-story') }}">Our Story</a></li>
            <li class="active"><a href="{{ URL::to('privacy-policy') }}">Privacy Policy</a></li>
            <li><a href="{{ URL::to('terms-and-condition') }}">Terms & Conditions</a></li>
        </ul>
    </div>
    <div class="col-sm-8 no-padding-right">
        <div class="container-fluid">
            <div class="row">
                                        <div class="panel-group" id="accordion">
                                          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                          Privacy Policy
                                                        </a>
                                                  </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in">
                                                  <div class="panel-body">
                                                        <p>
                                                                Your privacy is important to the us. Our goal is to provide you with a personalized online experience that
                                                                provides you with the information, resources, and services that are most relevant and helpful to you. This
                                                                Privacy Policy has been written to describe the conditions under which this web site is being made available
                                                                to you. The Privacy Policy discusses, among other things, how data obtained during your visit to this web site
                                                                may be collected and used. We strongly recommend that you read the Privacy Policy carefully. By using this web
                                                                site, you agree to be bound by the terms of this Privacy Policy. If you do not accept the terms of the Privacy
                                                                Policy, you are directed to discontinue accessing or otherwise using the web site or any materials obtained
                                                                from it. If you are dissatisfied with the web site, by all means <a href="/contact">contact us</a>; otherwise,
                                                                your only recourse is to disconnect from this site and refrain from visiting the site in the future.
                                                        </p>
                                                        <p>
                                                                The process of maintaining a web site is an evolving one, and My-Ad.ca may decide at some point in the future,
                                                                without advance notice, to modify the terms of this Privacy Policy. Your use of the web site, or materials
                                                                obtained from the web site, indicates your assent to the Privacy Policy at the time of such use. The effective
                                                                Privacy Policy will be posted on the web site, and you should check upon every visit for any changes.
                                                        </p>
                                                  </div>
                                                </div>
                                          </div>

                                          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                          Sites Covered by this Privacy Policy
                                                        </a>
                                                  </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                  <div class="panel-body">
                                                        <p>This Privacy Policy applies to all My-Ad.ca maintained web sites, domains, information portals, and registries.</p>
                                                  </div>
                                                </div>
                                          </div>

                                          <div class="panel panel-default">
                                                <div class="panel-heading">
                                                  <h4 class="panel-title">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                          Children’s Privacy
                                                        </a>
                                                  </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                  <div class="panel-body">
                                                        <p>
                                                        My-Ad.ca is committed to protecting the privacy needs of children, and we encourage parents and guardians to take an
                                                        active role in their children’s online activities and interests. The Operators do not intentionally collect information
                                                        from minors, and the Operators do not target its web site to children.
                                                        </p>
                                                  </div>
                                                </div>
                                          </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                          Links to Non-Operators Web Sites
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        My-Ad.ca’s web site may provide links to third-party web sites for the convenience of our users. If you access those
                        links, you will leave the My-Ad.ca’s web site. My-Ad.ca do not control these third-party websites and cannot represent
                        that their policies and practices will be consistent with this Privacy Policy. For example, other web sites may collect
                        or use personal information about you in a manner different from that described in this document. Therefore, you
                        should use other web sites with caution, and you do so at your own risk. We encourage you to review the privacy policy
                        of any web site before submitting personal information.
                        </p>
                        <div class="panel-inner">

                            <!-- Here we insert another nested accordion -->

                            <div class="panel-group" id="accordion2">
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerOne">
                                   Non-Personal Information
                                  </a></h4>
                                </div>
                                <div id="collapseInnerOne" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>Non-personal information is data about usage and service operation that is not directly associated with a specific personal identity. My-Ad.ca may collect and analyze non-personal information to evaluate how visitors use the My-Ad.ca’s web sites.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerTwo">
                                    Aggregate Information
                                  </a></h4>
                                </div>
                                <div id="collapseInnerTwo" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>My-Ad.ca may gather aggregate information, which refers to information your computer automatically provides to us and that cannot be tied back to you as a specific individual. Examples include referral data (the web sites you visited just before and just after our site), the pages viewed, time spent at our Web site, and Internet Protocol (IP) addresses. An IP address is a number that is automatically assigned to your computer whenever you access the Internet. For example, when you request a page from one of our sites, our servers log your IP address to create aggregate reports on user demographics and traffic patterns and for purposes of system administration.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerThree">
                                    Log Files
                                  </a></h4>
                                </div>
                                <div id="collapseInnerThree" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>Every time you request or download a file from the web site, My-Ad.ca may store data about these events and your IP address in a log file. My-Ad.ca may use this information to analyze trends, administer the web site, track users’ movements, and gather broad demographic information for aggregate use or for other business purposes.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerFour">
                                    Cookies
                                  </a></h4>
                                </div>
                                <div id="collapseInnerFour" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>Our site may use a feature of your browser to set a “cookie” on your computer. Cookies are small packets of information that a web site’s computer stores on your computer. My-Ad.ca’s web sites can then read the cookies whenever you visit our site. We may use cookies in a number of ways, such as to save your password so you don’t have to re-enter it each time you visit our site, to deliver content specific to your interests and to track the pages you’ve visited. These cookies allow us to use the information we collect to customize your experience so that your visit to our site is as relevant and as valuable to you as possible.</p>
                                    <p>Most browser software can be set up to deal with cookies. You may modify your browser preference to provide you with choices relating to cookies. You have the choice to accept all cookies, to be notified when a cookie is set or to reject all cookies. If you choose to reject cookies, certain functions and conveniences of our web site may not work properly, and you may be unable to use My-Ad.ca services that require registration in order to participate, or you will have to re-register each time you visit our site. Most browsers offer instructions on how to reset the browser to reject cookies in the “Help” section of the toolbar. We do not link non-personal information from cookies to personally identifiable information without your permission.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerFive">
                                    Personal Information
                                  </a></h4>
                                </div>
                                <div id="collapseInnerFive" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>Personal information is information that is associated with your name or personal identity. My-Ad.ca use personal information to better understand your needs and interests and to provide you with better service. On some of the My-Ad.ca web pages, you may be able to request information, subscribe to mailing lists, participate in online discussions, collaborate on documents, provide feedback, submit information into registries, register for events, apply for membership, or join technical committees or working groups. The types of personal information you provide to us on these pages may include name, address, phone number, e-mail address, user IDs, passwords, billing information, or credit card information.</p>
                                  </div>
                                </div>
                              </div>
                              <div class="panel panel-default">
                                <div class="panel-heading">
                                  <h4 class="panel-title"><a class="panel-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseInnerSix">
                                    Members-Only Web Sites
                                  </a></h4>
                                </div>
                                <div id="collapseInnerSix" class="panel-body collapse">
                                  <div class="panel-inner">
                                    <p>Information you provide on My-Ad.ca’s membership applications is used to create a member profile, and some information may be shared with other of the My-Ad.ca’s individual member representatives and organizations. Member contact information may be provided to other members on a secure web site to encourage and facilitate collaboration, research, and the free exchange of information among the My-Ad.ca’s members, but we expressly prohibit members from using member contact information to send unsolicited commercial correspondence. My-Ad.ca’s members may be automatically added to My-Ad.ca’s mailing lists. From time to time, member information may be shared with event organizers and/or other organizations that provide additional benefits to My-Ad.ca’s members. By providing us with your personal information on the membership application, you expressly consent to our storing, processing, and distributing your information for these purposes.</p>
                                  </div>
                                </div>
                              </div>

                            </div>

                            <!-- Inner accordion ends here -->
                      </div>
                    </div>
                  </div>
                                          </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                          How We Use Your Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        My-Ad.ca may use non-personal data that is aggregated for reporting about the My-Ad.ca’s web site usability, performance, and effectiveness. It may be used to improve the experience, usability, and content of the site.
                        </p>
                        <p>My-Ad.ca may use personal information to provide services that support the activities of the My-Ad.ca’s members and their collaboration on the My-Ad.ca’s standards and projects. When accessing the My-Ad.ca’s members-only web pages, your personal user information may be tracked by My-Ad.ca in order to support collaboration, ensure authorized access, and enable communication between members.</p>
                        <p>Credit card information may be collected to facilitate membership applications; or if you purchase a product or service from our website, such information will not be kept longer than necessary for providing the services requested. Credit card numbers are used only for processing payment and are not used for other purposes. Payment processing services may be provided by a third-party payment service, and a management company external to the My-Ad.ca may provide support for the financial activities of My-Ad.ca. My-Ad.ca may share your personal information with its partners to facilitate these transactions.</p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                          Information Sharing
                        </a>
                      </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        My-Ad.ca does not sell, rent, or lease any individual’s personal information or lists of email addresses to anyone
                        for marketing purposes, and we take commercially reasonable steps to maintain the security of this information.
                        However, My-Ad.ca reserve the right to supply any such information to any organization into which My-Ad.ca may merge
                        in the future or to which it may make any transfer in order to enable a third party to continue part or all of its
                        mission. We also reserve the right to release personal information to protect our systems or business, when we
                        reasonably believe you to be in violation of our Terms of Use or if we reasonably believe you to have initiated or
                        participated in any illegal activity. In addition, please be aware that in certain circumstances, My-Ad.ca may be
                        obligated to release your personal information pursuant to judicial or other government subpoenas, warrants, or other
                        orders.
                        </p>
                        <p>
                        In keeping with our open process, My-Ad.ca may maintain publicly accessible archives for the majority of our
                        activities. For example, posting an email to any of My-Ad.ca’s-hosted public mail lists or discussion forums,
                        subscribing to one of our newsletters or registering for one of our public meetings may result in your email address
                        becoming part of the publicly accessible archives.
                        </p>
                        <p>
                        On some sites, anonymous users are allowed to post content and/or participate in forum discussions. In such a case,
                        since no user name can be associated with such a user, the IP address number of a user is used as an identifier. When
                        posting content or messages to a My-Ad.ca site anonymously, your IP address may be revealed to the public.
                        </p>
                        <p>
                        If you are a registered member of My-Ad.ca's website or email list, you should be aware that some items of your
                        personal information may be visible to other members and to the public. My-Ad.ca’s member databases may retain
                        information about your name, e-mail address, company affiliation (if an organizational member), and such other
                        personal address and identifying data as you choose to supply. That data may be visible to other My-Ad.ca’s members
                        and to the public. Your name, e-mail address, and other information you may supply also may be associated in My-Ad.ca’s
                        publicly accessible records with My-Ad.ca’s various committees, working groups, and similar activities that you join,
                        in various places, including: (i) the permanently-posted attendance and membership records of those activities;
                        (ii) documents generated by the activity, which may be permanently archived; and, (iii) along with message content,
                        in the permanent archives of My-Ad.ca’s e-mail lists, which also may be public.
                        </p>
                        <p>
                        Please remember that any information (including personal information) that you disclose in public areas of our web
                        site, such as forums, message boards, and news groups, becomes public information that others may collect, circulate,
                        and use. Because we cannot and do not control the acts of others, you should exercise caution when deciding to
                        disclose information about yourself or others in public forums such as these.
                        </p>
                        <p>
                        Given the international scope of My-Ad.ca websites, personal information may be visible to persons outside your
                        country of residence, including to persons in countries that your own country’s privacy laws and regulations deem
                        deficient in ensuring an adequate level of protection for such information. If you are unsure whether this Privacy
                        Policy is in conflict with applicable local rules, you should not submit your information. If you are located within
                        the European Union, you should note that your information will be transferred to Canada, which is deemed by the
                        European Union to have inadequate data protection. Nevertheless, in accordance with local laws implementing European
                        Union Directive 95/46/EC of 24 October 1995 (“EU Privacy Directive”) on the protection of individuals with regard to
                        the processing of personal data and on the free movement of such data, individuals located in countries outside of
                        Canada who submit personal information do thereby consent to the general use of such information as provided in this
                        Privacy Policy and to its transfer to and/or storage in Canada.
                        </p>
                        <p>
                        If you do not want your personal information collected and used by My-Ad.ca, please do not visit My-Ad.ca’s web
                        site or apply for membership of any of My-Ad.ca websites or email lists.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                          Access to and Accuracy of Member Information
                        </a>
                      </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        My-Ad.ca are committed to keeping the personal information of our members accurate. All the information you have submitted to us can be verified and changed. In order to do this, please email us a request. We may provide members with online access to their own personal profiles, enabling them to update or delete information at any time. To protect our members’ privacy and security, we also may take reasonable steps to verify identity, such as a user ID and password, before granting access to modify personal profile data. Certain areas of My-Ad.ca’s web sites may limit access to specific individuals through the use of passwords or other personal identifiers; a password prompt is your indication that a members-only resource is being accessed.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
                          Security
                        </a>
                      </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        My-Ad.ca make every effort to protect personal information by users of the web site, including using firewalls and other security measures on its servers. No server, however, is 100% secure, and you should take this into account when submitting personal or confidential information about yourself on any web site, including this one. Much of the personal information is used in conjunction with member services such as collaboration and discussion, so some types of personal information such as your name, company affiliation, and email address will be visible to other My-Ad.ca’s members and to the public. My-Ad.ca assume no liability for the interception, alteration, or misuse of the information you provide. You alone are responsible for maintaining the secrecy of your personal information. Please use care when you access this web site and provide personal information.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
                          Opting Out
                        </a>
                      </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>
                        From time to time My-Ad.ca may email you electronic newsletters, announcements, surveys or other information. If you prefer not to receive any or all of these communications, you may opt out by following the directions provided within the electronic newsletters and announcements.
                        </p>
                        <p>If you have questions regarding this privacy policy, please <a href="/contact">contact us</a>.</p>
                      </div>
                    </div>
                  </div>
                                            
                </div>
            </div>

        </div>
    </div>
</div>
@stop