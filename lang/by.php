<?php

$menu = <<<EOD
  <li><a href="#share">Share this plan</a></li>
  <li><a href="https://www.change.org/petitions/eu-parliament-and-eu-commission-stop-mass-surveillance-protect-our-data-and-our-whistleblowers">Sign the petition</a></li>
  <!--li><a href="#">About the Pirate movement</a></li-->
EOD;

$share = "Share this plan with your friends... and the NSA!";

$manifesto = <<<EOD
  <div class="first box">
    <p><span class="intro">We are appalled</span> to learn of the unprecedented <strong>surveillance of Internet users</strong> worldwide through PRISM and similar programmes. Blanket surveillance capabilities such as these, especially when implemented without citizens' scrutiny, seriously <strong>threaten the human rights to free speech and privacy and with them the foundations of our democracies</strong>.<br /><br /></p>
    <p><span class="intro">We applaud whisteblower Edward Snowden</span> for his actions. When a government is truly by the people and for the people, it cannot be a crime to leak information on the course and extent of actions by the government, in the name of its citizens, for the claimed purpose of protecting them. A representative government in a democracy relies on the consent of its people. However, such consent cannot exist when the citizens are not fully informed.</p>
    <p>We note with alarm the complete lack of regard the US government is showing for the rights of European citizens and, more generally, anyone who uses US-based communication services and infrastructure. We also note the negative effect on its allies, the sovereignty of the affected countries and the competitiveness of their businesses.</p>
    <p><span class="intro">Europe must respond</span> to these revelations with due resolve. In light of this situation, it is important that the European Union, rather than remaining complicit with this abuse of powers that comes at an untenable cost to society, becomes a worldwide <strong>beacon for digital rights and privacy protection, government transparency and whistleblower protection</strong>.<br /><br /></p>
    <p><span class="intro">We call for:</span></p>
  </div>            
  <div class="box">
    <h3><a href="#" onclick="return toggle(this)">1. Asylum and Protection for Whistleblowers</a></h3>
    <div class="expanded">
      <p>The US government has demonstrated – in the cases of <a href="http://iam.bradleymanning.org">Bradley Manning</a> and others – that its <a href="http://www.guardian.co.uk/world/2012/mar/12/bradley-manning-cruel-inhuman-treatment-un">treatment of whistleblowers</a> is a cause for grave concern. The public labeling of Edward Snowden as a “traitor” by various US officials and media has created a climate in which he cannot be assured to receive a fair trial. He might be subject to persecution for his political belief in government transparency, and would certainly be in danger of facing inhumane or degrading treatment or punishment, including the threat of the death penalty.</p>
      <p>We call on all governments of Europe to <strong>treat sympathetically any applications for political asylum or subsidiary protection status</strong> by Mr Edward Snowden and other whistleblowers and to speedily expedite any such applications.</p>
    </div>
  </div>
  <div class="box">
    <h3><a href="#" onclick="return toggle(this)">2. Uncover the Facts</a></h3>
    <div class="expanded">
      <p>It is unacceptable that secret surveillance capabilities and practices <strong>circumvent democratic processes</strong> and prevent the critical, rational engagement necessary in a democracy to determine due and undue courses of action.</p>
      <p>We call on the European Parliament to form a <strong>committee of inquiry</strong> according to <a href="http://www.europarl.europa.eu/sides/getDoc.do?pubRef=-//EP//TEXT+RULES-EP+20130521+RULE-185+DOC+XML+V0//EN&language=EN&navigationBar=YES">Article 185 of its rules of procedure</a>. The facts to establish and publish are:</p>
      <ul class="chunk">
        <li>What are the true capabilities of PRISM?</li>
        <li>What data feeds and sources does it use?</li>
        <li>Which administrative bodies of the EU and its member states have had knowledge of or access to PRISM and similar programmes or data from them?</li>
        <li>To what extent have the <a href="http://www.europarl.europa.eu/charter/default_en.htm">Charter of Fundamental Rights</a>, the <a href="https://en.wikipedia.org/wiki/Data_Protection_Directive">Data Protection Directive</a>, the <a href="https://en.wikipedia.org/wiki/Directive_on_Privacy_and_Electronic_Communications">Directive on Privacy and Electronic Communications</a>, or any other EU laws been violated?</li>
      </ul>
      <p>We extend this call to all national parliaments – to investigate whether national constitutions, data protection laws and espionage laws have been violated.</p>
    </div>
  </div>
  <div class="box supporters">
    <h3><a href="#" onclick="return toggle(this)">3. Strong European Data Protection</a></h3>
    <div class="expanded">
      <p>The General Data Protection Regulation currently under consideration <a href="http://www.privacycampaign.eu/key-issues-of-the-regulation/">must be strengthened</a> to ensure a broad and far-reaching protection of private and business data. The <a href="http://lobbyplag.eu/">lobbying efforts</a> to the contrary must be resisted.</p>
      <p>Specifically, <strong>European citizens' data must not knowingly be surrendered to US intelligence agencies</strong>. <a href="https://www.openrightsgroup.org/blog/2013/how-the-eu-commission-caved-to-us-demands-to-water-down-its-privacy-law">Article 42</a> from the first leaked draft proposal, which addressed extra-territorial actions by third countries such as the USA Patriot Act and the USA Foreign Intelligence Surveillance Act and imposed barriers for foreign judicial authorities to access European data, must be reintroduced. Metadata and pseudonymous data must also be protected.</p>
      <p>According to the <a href="https://en.wikipedia.org/wiki/International_Safe_Harbor_Privacy_Principles">International Safe Harbor Privacy Principles</a>, US companies must inform users when granting access to their data to third parties. It appears that companies participating in the PRISM programme violated these provisions. In response, the EU must <strong>revoke the agreement</strong> to these Principles (<a href="http://eur-lex.europa.eu/LexUriServ/LexUriServ.do?uri=CELEX:32000D0520:EN:HTML">Commission Decision 2000/520/EC</a>) so that the affected companies are subject to European courts should they not cease these practices immediately. Safe Harbor must then be renegotiated with more effective safeguards and recourse mechanisms in place, or replaced by a new international agreement on data protection, e. g. based on the principles of the General Data Protection Regulation.</p>
    </div>
  </div>
  <div class="box">
    <h3><a href="#" onclick="return toggle(this)">4. International Treaty on the Freedom of the Internet</a></h3>
    <div class="expanded">
      <p>To ensure that the Internet remains an empowering and democratising force rather than continuing to be used as a tool to limit and curtail democracy and individual liberty, the EU should spearhead an <strong>international Treaty on the Freedom of the Internet</strong>. Such a treaty should strongly protect confidentiality of communications, freedom of expression and access to information (specifically as they pertain to the Internet) as well as net neutrality.</p>
    </div>
  </div>
  <div class="box">
    <h3><a href="#" onclick="return toggle(this)">5. Fund Privacy-Conscious Software</a></h3>
    <div class="expanded">
      <p>As an additional line of privacy defence, consumers must have the option of <strong>using software and services that strongly protect their privacy</strong>. Such software may offer anonymity, strong end-to-end encryption, peer-to-peer architectures, federation or the ability to self-host user data, user-auditable open source code and other privacy protection features.</p>
      <p>We applaud the fact that the current proposal for the <a href="http://ec.europa.eu/research/horizon2020/index_en.cfm">Horizon 2020</a> framework programme includes the goal to <em>&quot;<a href="http://www.kuleuven.be/eu/horizon2020/societal_challenges/security-more.html">ensure privacy and freedom in the Internet</a>&quot;</em>. We call on the European Union to ensure that a <strong>significantly larger percentage</strong> of the research funds is spent on advancing software and service choice in this way than is spent on <a href="https://en.wikipedia.org/wiki/INDECT">projects with the opposite goal</a>, i. e. surveillance and data-mining technology research, and that projects whose explicit aim is indiscriminate and suspicionless surveillance are rejected outright.</p>
    </div>          
  </div>
  <div class="box">
    <h3><a href="#" onclick="return toggle(this)">6. Prevent a European PRISM</a></h3>
    <div class="expanded">
      <p>We propose legislative measures to <strong>strengthen the defence against similar agency overreach in Europe</strong>.</p>
      <p><strong><a href="https://en.wikipedia.org/wiki/Tempora">Direct taps</a></strong> by governmental agencies into backbone Internet communication channels, such as the ones reportedly installed by the NSA as part of the <a href="http://thinkprogress.org/justice/2013/06/10/2133201/blarney-online-surveillance/?mobile=nc">BLARNEY programme</a>, must be explicitly outlawed. Such taps allow storing and data-mining of all Internet communications, bypassing all other controls and procedures and compromising all confidential data and everyone's privacy. Breaching the integrity of the network infrastructure in this unacceptable way undermines the confidence in the entire Internet and threatens all its benefits.</p>
      <p>We also renew our calls for the <strong>repeal of the <a href="https://en.wikipedia.org/wiki/Data_Retention_Directive">Data Retention Directive</a></strong>. The Czech and Romanian constitutional courts explicitly <a href="https://wiki.openrightsgroup.org/wiki/Data_Retention_Directive#Challenges_and_non-implementation">concluded</a> that broad and suspicionless data retention is a fundamental breach of basic human rights. By establishing the indiscriminate collection of large amounts of data without court approval, data retention programmes enable the kind of executive overreach that continues on platforms such as PRISM, threatening the separation of powers between the executive and the judiciary which is at the basis of our democracies.</p>
    </div>          
  </div>
EOD;

$undersigned = "The Undersigned";


?>