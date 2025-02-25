@extends('layouts.app')

@section('content')
    <div class="bg-white shadow-md rounded-lg p-6">
        <h1>Frequently Asked Question</h1>
        <div class="center wow fadeInDown pb-40">
            <header class="intro-header section-header text-center">
                <h2 class="section-title">Frequently Asked Questions</h2>
                <span class="line"></span>
            </header>

            <!--<p class="text-center" style="font-size: 16px;">Below are some questions that we get asked from time to time.</p>-->

            <button class="accordion active" id="faq1" onclick="displayMore(1)">What is YUME?</button>
            <div class="panel panelborder" id="faqpanel1" style="background-color: white; display: block;">
                <p class="mt-20">YUME is a music discovery platform where listeners stream future hit makers and are rewarded for doing so. Listeners are rewarded for streaming music and sharing the experience with others, completing the robust ecosystem where musicians and the community of music fans thrive.
                </p><p>YUME is a comprehensive music publishing and record label solution, combined with a one-stop-shop platform designed to bring the artist’s narrative to a wider audience.</p><p></p>
            </div>

            <button class="accordion" id="faq2" onclick="displayMore(2)">As an artist, how to connect with Yume?</button>
            <div class="panel" id="faqpanel2" style="background-color: white; display: none;">
                <p class="mt-20">You may connect with Yume through our publishing page: <a href="https://www.yume.global/publishing.php" target="_self">https://www.yume.global/publishing.php</a>. Fill out the form and express your interest in joining Yume.</p>
            </div>

            <button class="accordion" id="faq3" onclick="displayMore(3)">Is it exclusive to English songs?</button>
            <div class="panel" id="faqpanel3" style="background-color: white; display: none;">
                <p class="mt-20">No. We will consider any language if the song is good and of great quality.</p>
            </div>

            <button class="accordion" id="faq4" onclick="displayMore(4)">What genre do you need?</button>
            <div class="panel" id="faqpanel4" style="background-color: white; display: none;">
                <p class="mt-20">Any genre will be considered if the song has a good-quality recording and radio radio-ready.</p>
            </div>

            <button class="accordion" id="faq5" onclick="displayMore(5)">How do I publish my songs?</button>
            <div class="panel" id="faqpanel5" style="background-color: white; display: none;">
                <p class="mt-20">First, you need to fill out the form on the publishing page expressing your interest in publishing your song with us. After that, someone from Yume will connect with you for a screening of your songs. If your songs pass, you will proceed with the signing of the agreement and provide the necessary requirements. Once everything is done, we will publish your songs right away and distribute them to streaming platforms around the world.</p>
            </div>

            <button class="accordion" id="faq6" onclick="displayMore(6)">How much can I earn from the streams of my songs?</button>
            <div class="panel" id="faqpanel6" style="background-color: white; display: none;">
                <p class="mt-20">There is no fixed formula for how much you will earn for your streams.
                </p><p>Generally, we will split all income earned 50/50. Artists/Songwriters will get 50% of the royalties, and Yume get the other 50%.</p><p></p>
            </div>

            <button class="accordion" id="faq7" onclick="displayMore(7)">How can we assure as an artist that we still retain full ownership of the songs?</button>
            <div class="panel" id="faqpanel7" style="background-color: white; display: none;">
                <p class="mt-20">Artists/bands will retain full 100% ownership of the songs. Yume will administer the rights of your songs for a 5-year term.  Think of YUME as the company handling all of your administration and paperwork while you continue to create/play music!</p>
            </div>

            <button class="accordion" id="faq8" onclick="displayMore(8)">In case we decide to be part of the record label, are we required to produce a certain number of songs per year?</button>
            <div class="panel" id="faqpanel8" style="background-color: white; display: none;">
                <p class="mt-20">The minimum song requirement for you to be signed with Yume is only 3 songs. Any songs created after that will still be part of the exclusive 5-year term agreement.</p>

            </div>

            <button class="accordion" id="faq9" onclick="displayMore(9)">As an artist, how much are we going to earn per play, share in concert shows, percentage in royalties, etc?</button>
            <div class="panel" id="faqpanel9" style="background-color: white; display: none;">
                <p class="mt-20">Artists’ earnings vary greatly depending on a number of situations and level of experience in the industry.  Generally, YUME will split income 50:50 for recording and music publishing royalties.   Other potential income streams will be determined on a case-by-case basis.  For example, not all artists will be able to tour or get their music in TV or film.  YUME will use its best efforts to maximize each artist's income stream.  Remember, YUME is not a one-size-fits-all model.</p>
            </div>

            <button class="accordion" id="faq10" onclick="displayMore(10)">What will happen with our songs that are already uploaded in Spotify, YouTube, etc. if we agree to sign with Yume? Do we need to take them down?</button>
            <div class="panel" id="faqpanel10" style="background-color: white; display: none;">
                <p class="mt-20">YUME can do a relaunch of your prior released songs or create a special "collection" of songs that makes it a "new" release. For example, a song can be re-titled as "I Love You Song (YUME version).\” There is no need to take them down.</p>
            </div>

            <button class="accordion" id="faq11" onclick="displayMore(11)">As an artist, are we going to receive a copy with the agreement so that we are protected as well?</button>
            <div class="panel" id="faqpanel11" style="background-color: white; display: none;">
                <p class="mt-20">Absolutely. The contract is needed for both parties to be a part of YUME. You will have your own copy which is signed by you and Yume.</p>
            </div>

            <button class="accordion" id="faq12" onclick="displayMore(12)">What is the PowerLine?</button>
            <div class="panel" id="faqpanel12" style="background-color: white; display: none;">
                <p class="mt-20">At YUME, we understand that exploring a new business opportunity can be overwhelming and daunting. That's why we offer a risk-free way to explore our opportunity. With our <strong>POWERLINE</strong>-driven marketing system, you can reserve a FREE position on our platform and take the time to conduct thorough due diligence before making any financial commitments
                </p><p>The <strong>POWERLINE</strong>-driven marketing system provides an exclusive opportunity to access our back office, where you can review all the information and gain a comprehensive understanding of YUME’s potential. </p>
                <p>We firmly believe that transparency and information are key to making an informed decision about whether YUME is the right fit for you.</p>
                <p>Freemium members are placed on the PowerLine on a first-come-first-served basis, providing everyone with an equal opportunity to benefit from the platform. Freemium members who upgrade to Premium members will move to the Binary, surpassing all those who wait.</p><p></p>
            </div>

            <button class="accordion" id="faq13" onclick="displayMore(13)">What are the benefits of being a Freemium member if any?</button>
            <div class="panel" id="faqpanel13" style="background-color: white; display: none;">
                <p class="mt-20">As a Freemium member, you have the opportunity to give the platform a try before upgrading to Premium Membership. As a Freemium member, you can view the potential streaming income that you can earn as you stream and explore our platform. If you upgrade to Premium Membership within 28 days from your date of signing, your accumulated Streaming Points will be carried forward and be monetized in the Streaming Income payout. However, if you choose to stay in the Freemium tier, your Streaming Points will be reset to zero. You will start accumulating points again, allowing you to monetize them within the 28-day threshold when you upgrade.
                </p><p>Additionally, take advantage of your Active Replicator Page for recruitment purposes.</p>
                <p>However, be aware of a potential setback: if your recruited downlines decide to upgrade to a Premium membership while you remain a Freemium member, there is a risk of losing those downlines. In such a case, the system will consider the downline as orphaned and automatically assign a new direct referrer.</p>
                <p>Take note that there's no fixed timeline for Freemium members to upgrade to a Premium membership. Therefore, you can enjoy the benefits of Freemium membership for as long as you like, while keeping the option open to explore the additional perks that come with a Premium membership when the time is right for you.</p><p></p>
            </div>

            <button class="accordion" id="faq14" onclick="displayMore(14)">How can I upgrade to a Premium member?</button>
            <div class="panel" id="faqpanel14" style="background-color: white; display: none;">
                <p class="mt-20">To upgrade to a Premium member, there is a one-time membership fee of US$20 and affiliate sign-up fees of US$100.00. Thereafter, a periodic platform fee of US$4.99</p>
            </div>

            <button class="accordion" id="faq15" onclick="displayMore(15)">How to pay for my Premium membership upgrade?</button>
            <div class="panel" id="faqpanel15" style="background-color: white; display: none;">
                <p class="mt-20">We offer various payment options to suit your convenience:
                </p><ol>
                    <li><strong>Credit/Debit Card</strong>
                        <p>We accept Visa, Master, American Express, Discovery, and UnionPay</p>
                    </li>
                    <li><strong>Digital Wallets</strong>
                        <p>Choose from a range of digital wallets from different countries, such as GCash for the Philippines, DANA for Indonesia, and TouchNGo for Malaysia. <!--
  </li-->
                        </p></li><li><strong>Cryptocurrency</strong>
                        <p>We are using a crypto payment gateway to collect your payment. As in any cryptocurrency transaction, we will need blockchain network confirmations before we can confirm your payment. Once confirmed, the system will create your account and send you a Welcome Email with your login details. Depending on the blockchain network traffic (which we do not have control over), the process can sometimes take 10 minutes to 30 minutes. You must send the exact amount of cryptocurrency BUSD(BEP20) and USDT(TRC-20) displayed on the payment page within the time stipulated to prevent the “time out” and delay.</p>
                        <p>Until and unless you receive a Welcome email from us, your registration is pending, and you are not able to log in.</p>
                    </li>
                    <li><strong>e-Code</strong>
                        <p>We understand that many people have limited knowledge and access to cryptocurrency, and we created the e-Code. The e-Code is like a preload shopping gift card. When you input a valid e-Code, your registration will be completed instantaneously, and you will receive a Welcome email with the login credentials.</p>
                    </li>
                </ol>
                <p></p>
            </div>

            <button class="accordion" id="faq16" onclick="displayMore(16)">What are the benefits of a Premium member?</button>
            <div class="panel" id="faqpanel16" style="background-color: white; display: none;">
                <p class="mt-20">As a Premium member, you are entitled to Four (4) income streams.</p>
                <ol>
                    <li><strong>Direct Referral Commission</strong>
                        <p>You will earn a US$15.00 Direct Referral Commission for each person you successfully refer to the platform who becomes a Premium member by paying the US$100.00 affiliate sign-up fee.</p>
                        <p>Additionally, if any of the people you enroll choose to enroll others, not only will they be rewarded with a Direct Referral Commission, but you will also receive additional Direct Referral Commissions up to 5 levels deep (depending on your qualified Rank). </p>
                        <p>There is no limit to the number of Premium members you can personally enroll (your first level) or the number of people they can enroll personally (your second level), etc. This is why the Direct Referral Commission can become so significant over time. </p>              <div style="overflow: auto;">
                            <table class="table mt-30" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 900px;">
                                <tbody>
                                <tr>
                                    <td width="10%" align="center"><strong>Level</strong></td>
                                    <td width="15%" align="center"><strong>Unranked</strong></td>
                                    <td width="15%" align="center"><strong>Silver</strong></td>
                                    <td width="15%" align="center"><strong>Gold</strong></td>
                                    <td width="15%" align="center"><strong>Diamond </strong></td>
                                    <td width="15%" align="center"><strong>Platinum</strong></td>
                                </tr>
                                <tr>
                                    <td align="center">1</td>
                                    <td align="center">15%</td>
                                    <td align="center">15%</td>
                                    <td align="center">15%</td>
                                    <td align="center">15%</td>
                                    <td align="center">15%</td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">5%</td>
                                    <td align="center">5%</td>
                                    <td align="center">5%</td>
                                    <td align="center">5%</td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">5%</td>
                                    <td align="center">5%</td>
                                    <td align="center">5%</td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">3%</td>
                                    <td align="center">3%</td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">&nbsp;</td>
                                    <td align="center">2%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li><strong>Binary Commission</strong>
                        <p>To start earning the Binary Reward, you must personally enroll at least two (2) new Premium members in your team. Your uplines (or anyone else in the placement tree) may also place Premium members in your placement tree.  </p>
                        <p>The Binary Commission is dependent on the number of Premium Members you have in your Left Team and Right Team. Every 1 Premium member in the Left Team and the Right Team constitutes a Pair. For every Pair, you earn $3.00 and the number of Pairs you are entitled to in a week will depend on your Ranking.</p>
                        <p>Your Ranking is dependent on the number of directly recruited Premium Members that you have. Spilled-over affiliates from your uplines do not contribute toward your Ranking.</p>
                        <div style="overflow: auto;">
                            <table class="table" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 900px;">
                                <tbody>
                                <tr>
                                    <td width="40%" align="center"><strong>Rank</strong></td>
                                    <td width="15%" align="center"><strong>Silver</strong></td>
                                    <td width="15%" align="center"><strong>Gold</strong></td>
                                    <td width="15%" align="center"><strong>Diamond </strong></td>
                                    <td width="15%" align="center"><strong>Platinum</strong></td>
                                </tr>
                                <tr>
                                    <td align="center">Number of Active  Direct Recruits</td>
                                    <td align="center">5</td>
                                    <td align="center">10</td>
                                    <td align="center">15</td>
                                    <td align="center">20</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div style="overflow: auto;">
                            <table class="table mt-30" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 900px;">
                                <tbody>
                                <tr>
                                    <td width="25%" align="center"><strong>Rank</strong></td>
                                    <td width="15%" align="center"><strong>Unrank</strong></td>
                                    <td width="15%" align="center"><strong>Silver</strong></td>
                                    <td width="15%" align="center"><strong>Gold</strong></td>
                                    <td width="15%" align="center"><strong>Diamond </strong></td>
                                    <td width="15%" align="center"><strong>Platinum</strong></td>
                                </tr>
                                <tr>
                                    <td align="center">Weekly Max Pairs </td>
                                    <td align="center">30</td>
                                    <td align="center">100</td>
                                    <td align="center">200</td>
                                    <td align="center">300</td>
                                    <td align="center">500</td>
                                </tr>
                                <tr>
                                    <td align="center">Weekly Max Commission </td>
                                    <td align="center">US$90</td>
                                    <td align="center">US$300</td>
                                    <td align="center">US$600</td>
                                    <td align="center">US$900</td>
                                    <td align="center">US$1,500</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                    <li class="pt-20"><strong>Mega Matching Bonus</strong>
                        <p>While the Direct Referral Commissions and Binary Commissions are substantial, our Mega Matching Bonuses are even more generous!</p>
                        <p>There are 2 types of Mega Matching Bonus</p>              <ol>
                            <li>
                                You match 50% of the Binary Commission earned by everyone you directly enroll.
                                <p>Additionally, a percentage of everyone your direct recruits enroll FOUR (4) ENROLLMENT LEVELS DEEP, regardless of where they fall in your binary!</p>                  <div style="overflow: auto;">
                                    <table class="table mt-30" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 900px;">
                                        <tbody>
                                        <tr>
                                            <td width="20%" align="center"><strong>Level/Rank</strong></td>
                                            <td width="20%" align="center"><strong>Silver</strong></td>
                                            <td width="20%" align="center"><strong>Gold</strong></td>
                                            <td width="20%" align="center"><strong>Diamond </strong></td>
                                            <td width="20%" align="center"><strong>Platinum</strong></td>
                                        </tr>
                                        <tr>
                                            <td align="center">1</td>
                                            <td align="center">50%</td>
                                            <td align="center">50%</td>
                                            <td align="center">50%</td>
                                            <td align="center">50%</td>
                                        </tr>
                                        <tr>
                                            <td align="center">2</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">10%</td>
                                            <td align="center">10%</td>
                                            <td align="center">10%</td>
                                        </tr>
                                        <tr>
                                            <td align="center">3</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">5%</td>
                                            <td align="center">5%</td>
                                        </tr>
                                        <tr>
                                            <td align="center">4</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">&nbsp;</td>
                                            <td align="center">5%</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                            <li>Platinum members earn an additional 5% Mega Matching Bonus on the Streaming Income earned by everyone they directly enroll. </li>
                        </ol>
                    </li>
                    <li class="pt-20">
                        <strong>Steaming Income</strong>
                        <p>As a Premium member, you earn Streaming Points when you stream music and videos daily. The Streaming Points you can earn on each streaming are dependent on your rank. The number of Streaming Points you can earn in a day depends on the time you spend streaming. </p>
                        <p>The value of each Streaming Point is determined by the allocated revenue of Yume for that month divided by the overall number of Streaming Points for the same month.  </p>              <div style="overflow: auto;">
                            <table class="table mt-30" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 600px;">
                                <tbody>
                                <tr>
                                    <td width="20%" align="center"><strong>Rank</strong></td>
                                    <td width="20%" align="center"><strong>Streaming Points per task </strong></td>
                                </tr>
                                <tr>
                                    <td align="center">Unrank</td>
                                    <td align="center">0.50</td>
                                </tr>
                                <tr>
                                    <td align="center">Silver</td>
                                    <td align="center">0.80</td>
                                </tr>
                                <tr>
                                    <td align="center">Gold</td>
                                    <td align="center">1.00</td>
                                </tr>
                                <tr>
                                    <td align="center">Diamond</td>
                                    <td align="center">1.50</td>
                                </tr>
                                <tr>
                                    <td align="center">Platinum</td>
                                    <td align="center">2.00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </li>
                </ol>
            </div>

            <button class="accordion" id="faq17" onclick="displayMore(17)">Membership paid via Credit Card</button>
            <div class="panel" id="faqpanel17" style="background-color: white; display: none;">
                <p class="mt-20">When a member pays for their membership using a credit card, their membership will be placed on "HOLD" for a period of two weeks. During this time, no commissions will be paid to the uplines associated with their membership, and all commissions earned will be held in escrow within the Escrow Wallet.
                </p><p>After the two-week period, on the third Sunday, the "HOLD" status expires, and commissions are tabulated for the membership. Additionally, all escrowed earnings are released to the member's e-wallet. </p><p></p>
            </div>

            <button class="accordion" id="faq18" onclick="displayMore(18)">How to create an e-Code? </button>
            <div class="panel" id="faqpanel18" style="background-color: white; display: none;">
                <p class="mt-20">The value of each e-Code is US$120.  To create an e-Code, you can use the balances from either the E-wallet or the Cash Wallet.</p>
            </div>

            <button class="accordion" id="faq19" onclick="displayMore(19)">What is a Cash wallet</button>
            <div class="panel" id="faqpanel19" style="background-color: white; display: none;">
                <p class="mt-20">The Cash Wallet is required when you want to create an e-Code or Upgrade. The minimum top-up value is US$10. Currently, you can Top-Up through credit cards, wallets, and cryptocurrency. For credit card top-up, the maximum amount is US$50. For cryptocurrency, you can only top up with USDT (TRC-20) and BUSD (BEP20) and tabulate based on the company’s “buy” rate. </p>
            </div>

            <button class="accordion" id="faq20" onclick="displayMore(20)">What are Streaming Points and how can I earn them?</button>
            <div class="panel" id="faqpanel20" style="background-color: white; display: none;">
                <p class="mt-20">Streaming Points are earned every time you stream music on our platform. These points can then be converted into cash earnings</p>
            </div>

            <button class="accordion" id="faq21" onclick="displayMore(21)">How does the conversion of Streaming Points work?</button>
            <div class="panel" id="faqpanel21" style="background-color: white; display: none;">
                <p class="mt-20">The Company allocates 25% of the publishing income as the pool to be shared by all Streaming Points. The value per Streaming Point varies each month depending on the monthly company’s publishing revenue.
                </p><p>Streaming Income is tabulated at the end of each period and paid out within 7 days.</p><p></p>
            </div>

            <button class="accordion" id="faq22" onclick="displayMore(22)">What are Reward points and how can I earn them?</button>
            <div class="panel" id="faqpanel22" style="background-color: white; display: none;">
                <p class="mt-20">Reward points are earned based on 10% of your affiliate commission. These points can be redeemed for various rewards such as gifts, raffle entries, or concert tickets. The percentage of reward points available for redemption varies based on your Redemption Entitlement Level (REL). </p>
            </div>

            <button class="accordion" id="faq23" onclick="displayMore(23)">Reward Entitlement Level (REL)</button>
            <div class="panel" id="faqpanel23" style="background-color: white; display: none;">
                <p class="mt-20">The Reward Entitlement Level (REL) is a measure determined by the number of accumulated Platinum members within your team. As you gather more Platinum members in your team, your Reward Entitlement Level rises, indicating your increasing success within the platform.
                </p><p>Your Reward Entitlement Level plays a crucial role in determining the percentage of reward points available for redemption. Essentially, the higher your Reward Entitlement Level, the greater the percentage of reward points you can utilize for various rewards, such as gifts, raffle entries, or concert tickets. This system incentivizes members to actively build and support their teams, fostering a collaborative environment where everyone benefits from collective success.</p><p></p>
                <div style="overflow: auto;">
                    <table class="table mt-30" width="100%" border="1" cellspacing="5" cellpadding="5" style="border:1px solid #ccc;min-width: 900px;">
                        <tbody>
                        <tr>
                            <td width="10%" align="center"><strong>Status</strong></td>
                            <td width="15%" align="center"><strong>2 Stars Platinum</strong></td>
                            <td width="15%" align="center"><strong>3 Stars Platinum</strong></td>
                            <td width="15%" align="center"><strong>4 Stars Platinum</strong></td>
                            <td width="15%" align="center"><strong>Executive </strong></td>
                        </tr>
                        <tr>
                            <td align="center"><strong>Number of Accumulated Platinum</strong></td>
                            <td align="center">2</td>
                            <td align="center">3</td>
                            <td align="center">4</td>
                            <td align="center">10</td>
                        </tr>
                        <tr>
                            <td align="center"><strong>Percentage of Reward Points available for redemption</strong></td>
                            <td align="center">60%</td>
                            <td align="center">70%</td>
                            <td align="center">80%</td>
                            <td align="center">100%</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <button class="accordion" id="faq24" onclick="displayMore(24)">How can I withdraw the earnings?</button>
            <div class="panel" id="faqpanel24" style="background-color: white; display: none;">
                <p class="mt-20">Earnings can be withdrawn at any time and multiple times per day, with a processing time of 24 hours. The minimum withdrawal amount is US$100, and all payouts are through online banking or cryptocurrency. For cryptocurrency we payout in USDT (TRC-20) and BUSD(BEP20), based on the company's "Sell" rate.
                </p><p>An administrative fee of 3% with a minimum of US$1 and a 1.5 USDT/BUSD network fee (for cryptocurrency) will be charged per withdrawal. Payments are made directly to your bank account or USDT (TRC-20) or BUSD (BEP20) wallet, so it is important to have an updated and accurate bank account and crypto wallet address in the back office to avoid any loss.</p><p></p>
            </div>

            <button class="accordion" id="faq25" onclick="displayMore(25)">Why do I stop earning commission and streaming income?</button>
            <div class="panel" id="faqpanel25" style="background-color: white;">
                <p class="mt-20">The only reason is that you have gone Inactive. To continue earning commission and streaming income, you need to remain “Active” by paying the periodic platform fee of US$4.99. If you opt to pay yearly, you will enjoy a 30% discount.</p>
            </div>

            <button class="accordion" id="faq26" onclick="displayMore(26)">Forgot Password?</button>
            <div class="panel" id="faqpanel26" style="background-color: white;">
                <p class="mt-20">To retrieve a forgotten password, click on the "Forgot Password" tab on the login page and a new password will be generated and sent to the email address used during registration. Note that support staff will not be able to assist with password retrieval due to encryption.</p>
            </div>

            <button class="accordion" id="faq27" onclick="displayMore(27)">Can I edit my Profile?</button>
            <div class="panel" id="faqpanel27" style="background-color: white;">
                <p class="mt-20">Yes, you can. The administrator will NOT be responsible for the integrity and security of your back office if it is compromised due to your negligence. Any financial loss will be self-borne.</p>
            </div>

            <button class="accordion" id="faq28" onclick="displayMore(28)">Where is the Company located?</button>
            <div class="panel" id="faqpanel28" style="background-color: white;">
                <p class="mt-20">The Company is in Las Vegas, Nevada, USA. For all support issues, you can write to <a href="mailto:customercare@yume.global">customercare@yume.global</a></p>
            </div>

            <button class="accordion" id="faq29" onclick="displayMore(29)">What time zone is the system and platform based in?</button>
            <div class="panel" id="faqpanel29" style="background-color: white;">
                <p class="mt-20">The system and platform’s time zone is Pacific Standard Time (PST) (GMT -8).</p>
            </div>

        </div>
    </div>
@endsection
