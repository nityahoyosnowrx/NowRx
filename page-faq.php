<?php
/*
 Template Name: FAQs
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large'); ?>

<?php endif; ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero--sub-page">
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-middle">
      <div class="large-12 cell text-center">
        <h1 class="headline"><?php the_title(); ?></h1>
        <h4>Have a question about NowRx Pharmacy that isn't answered below?</h4>
        <h4>Send us an email at <a href="mailto:info@nowrx.com">info@nowrx.com</a> and we'll be happy to answer.</h4>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-10 large-offset-1 cell">
        <ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">What is NowRx pharmacy?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx pharmacy is a full-service retail pharmacy that uses modern technology and proprietary software to provide a simple, more customer friendly pharmacy.<br><br>This includes things like FREE prescription delivery in under 5 hours, automatic application of coupons, live pharmacist consultations and much more.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How does NowRx pharmacy work?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx Pharmacy is easy to use and works in 3 simple steps.</p>
		<ol>
		<li>You or your doctor sends a prescription to NowRx Pharmacy</li>
              	<li>Once we have received your prescription, we will reach out to you in order to get some basic information (insurance, payment method, preferred delivery time, etc.).</li>
              	<li>Once everything has been confirmed we deliver your medication in under 5 hours for your regular copay!</li>
		</ol>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How do I send a new prescription to NowRx pharmacy?</a>
            <div class="accordion-content" data-tab-content>
              <p>Your doctor can send a prescription to NowRx Pharmacy through e-prescribe or fax. Just show the following information to your doctor or tell them to look us up in their EMR.</p>
              <p><strong><u>e-Prescribe</u></strong> <br></p>
              <p><strong>Bay Area:</strong> NowRx Mtn V</p>
              <p><strong>Orange County:</strong> NowRx Irvn</p>
              <p><strong><u>Fax</u></strong> <br></p>
              <p><strong>Bay Area:</strong> (650) 963-3204 </p>
              <p><strong>Orange County:</strong> (949) 418-9013 </p>
              <p>Alternatively, you can text us a picture of your prescription or call us directly at <a href=tel:"(844) 466-6979">(844) 466-6979</a></p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How do I transfer refills from my old pharmacy to NowRx pharmacy?</a>
            <div class="accordion-content" data-tab-content>
              <p>Transferring a prescription to NowRx pharmacy takes less than 5 minutes.</p>
	      <p>Just visit <a href="https://try.nowrxpharmacy.com/">https://try.nowrxpharmacy.com/</a> or give us a call at <a href=tel:"(844) 466-6979">(844) 466-6979</a> to get started!</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Where is NowRx pharmacy located and where do you deliver?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx pharmacy has multiple locations throughout the Silicon Valley and Orange County California areas.</p>
              <p>We can deliver to your house, your work, or anywhere that is convenient for you!</p>
              <p><a href="https://www.nowrx.com/locations/">Click here for a full list of locations and service areas.</a></p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">When will NowRx Pharmacy deliver my prescription?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx will deliver your prescription within 5 hours of receiving.</p>
              <p>If we receive a prescription outside of our business hours, we will deliver it as soon as we open the following day! </p>
	      <p>In some cases if your insurance company asks for more information from your doctor, or if you have a rare medication that we do not carry in inventory, then we may be unable to deliver the same day- we will let you know immediately if such a situation arises so we can make other arrangements.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How Does NowRx Protect my Health Information?</a>
            <div class="accordion-content" data-tab-content>
              <p>All health-related data is stored offline on a secure HIPAA compliant server.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How does NowRx ensure a safe delivery of my medication?</a>
            <div class="accordion-content" data-tab-content>
              <p>All NowRx deliveries are made by HIPAA certified NowRx employees. These drivers have undergone extensive background checks and training to ensure a safe delivery of all your medication needs.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Is NowRx pharmacy delivery really free?</a>
            <div class="accordion-content" data-tab-content>
              <p>Yes! Our tech enabled pharmacy operations significantly reduce operating costs, which allow us to provide customer benefits like free same-day pharmacy delivery for absolutely no charge to the customer! </p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How do NowRx prices compare to other pharmacies or GoodRx?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx proprietary software automatically searches for, acquires and applies available drug manufacturer coupons.</p>
              <p>This allows us to regularly offer low medication prices that are below or competitive with most retail brick & mortar pharmacies. We will also price match most medications if you are able to find a lower price.</p>
              <p>For medications covered by insurance, price is set by the insurance company in the form of a copay and cannot be adjusted or altered by NowRx or any other pharmacy.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Does NowRx pharmacy accept my insurance?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx accepts all major insurance plans with the exception of Kaiser and Medicaid/MediCal.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How do I schedule a free consultation?</a>
            <div class="accordion-content" data-tab-content>
              <p>Scheduling a consultation with a NowRx pharmacist is easy and can be done in minutes.</p>
	      <p>Just give us a call at <a href=tel:"(844) 466-6979">(844) 466-6979</a> and we’ll be happy to get you set up!</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Does NowRx pharmacy deliver controlled substances?</a>
            <div class="accordion-content" data-tab-content>
              <p>Yes. For controlled substance delivery, NowRx will need proof of identification and a signature from the individual that was prescribed the medication at the time of delivery.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How does NowRx pharmacy help with prior authorizations?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx works directly with doctors and prescribers to help streamline prior authorizations. Through our partnership with <a href="https://www.covermymeds.com/main/">CoverMyMeds</a>, NowRx drastically reduces time to approval and helps increase adherence to medication regimens.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How is NowRx different than mail order?</a>
            <div class="accordion-content" data-tab-content>
              <p><strong>Mail order pharmacies</strong></p>
              <ul>
                <li>Typically located in different states</li>
                <li>Restricted in medications they can legally store and deliver</li>
                <li>Delivery typically takes 3-14 days</li>
                <li>Automated or no customer support available</li>
                <li>1 in 5 customers encounter problems (e.g. late delivery,etc.)*</li>
              </ul>
              <p><em>*Based off Survey Monkey 2019 Mail Order Pharmacy Survey)</em></p>
              <p><strong>NowRx Pharmacy</strong></p>
              <ul>
                <li>Local pharmacy located in every area we offer delivery</li>
                <li>Delivers all medications (except Compound)</li>
                <li>Delivery in under 5 hours, completely FREE</li>
                <li>Live pharmacist available to talk to you whenever you need it</li>
                <li>5 Star Rated Customer Service <a href="https://www.yelp.com/biz/nowrx-mountain-view-3">(See Our Reviews)</a></li>
              </ul>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Can I manage prescriptions for a family member or loved one?</a>
            <div class="accordion-content" data-tab-content>
              <p>Yes! NowRx allows you to set your head of household if a single person will be managing the family’s prescriptions.</p>
              <p>Just remember, for controlled substances we will need proof of identification and a signature from the individual that was prescribed the medication.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How does NowRx pharmacy handle special requests?</a>
            <div class="accordion-content" data-tab-content>
              <p>Special requests (e.g. blister packs, medication sorting, etc.) are available upon request. Just let our pharmacist know when they reach out to schedule your delivery!</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">Where does NowRx get their medications from?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx only sells FDA approved medications supplied by leading pharmacy wholesalers in the US including McKesson Corporation.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">What forms of payment does NowRx Pharmacy accept?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx Pharmacy accepts credit card payment either entered securely through our app or via phone. All payment and personal information uses 256 bit encryption technology to keep your information safe and confidential.</p>
            </div>
          </li>
          <li class="accordion-item" data-accordion-item>
            <a href="#" class="accordion-title">How do I get an FSA receipt?</a>
            <div class="accordion-content" data-tab-content>
              <p>NowRx will provide FSA receipts upon request.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="testimonials-section-2">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-8 large-offset-2 cell">
        <div class="orbit" role="region" aria-label="NowRx Testimonials" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
          <div class="orbit-wrapper">
            <div class="orbit-container">
              <div class="is-active orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-victoria-howard.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“NowRx rocks! I have all my prescriptions delivered straight to my office. The customer service is excellent, they are really fast, and the cost is the same as getting my prescriptions filled at CVS or Walgreens. Thanks NowRx!”</p>
                      <cite>Victoria H.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-danna-y.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“My husband and I have been using NowRx since early this year and I wish we knew about this pharmacy earlier. It's fast (same day delivery), convenient and their customer service people are very friendly. No more driving to the pharmacy and waiting for medications to be filled.”</p>
                      <cite>Danna Y.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-christene-m.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“I cannot say strongly enough how much better it is to have prescriptions delivered to my door, mostly within hours, as opposed to endlessly waiting at my local drug store. I would never go back. NowRx is the best.”</p>
                      <cite>Christene M.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-tony-m.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“NowRx is great. Huge time saver... no more standing in line or sitting in your idling car waiting for next available teller... They deliver the prescription to your address within a 3 hour time window. They can handle both regular prescriptions and controlled substance prescriptions.”</p>
                      <cite>Tony M.</cite>
                    </div>
                  </div>
                </div>
              </div>
              <div class="orbit-slide testimonial">
                <div class="grid-x grid-padding-x">
                  <div class="small-3 cell">
                    <img class="testimonial-image border-styled small" src="<?php echo get_template_directory_uri(); ?>/library/images/testimonial-neil-c.jpg" alt="First Lastname">
                  </div>
                  <div class="small-9 cell">
                    <div class="testimonial-copy">
                      <p>“We have been using NowRX for the last year and the service is great. NowRx handles our refills and they coordinate with the doctor's office. They go the extra mile in customer service!”</p>
                      <cite>Neil C.</cite>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <nav class="orbit-bullets">
            <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
            <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="2"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="3"><span class="show-for-sr">Second slide details.</span></button>
            <button data-slide="4"><span class="show-for-sr">Second slide details.</span></button>
          </nav>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="featured-in-section">
  <div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell text-center">
        <p class="text-small" style="margin-bottom: 30px;">NowRx Has Been Featured In:</p>
        <p>
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-cnbc.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-fortune.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-forbes.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-abc-7.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-business-insider.svg" alt="">
          <img class="featured-in-section-logo" src="<?php echo get_template_directory_uri(); ?>/library/images/brands-image-sfc2.svg" alt="">
        </p>
      </div>
    </div>
  </div>
</section>

<section class="how-it-works panel--primary panel--cta--doctors">
  <div class="grid-container text-center">
    <div class="grid-x grid-padding-x">
      <div class="large-12 cell">
        <p class="pre-headline">Learn More About NowRx</p>
        <h2 class="headline">Discover How NowRx <br>Helps Your Patients</h2>
        <a style="margin-top: 20px;" data-toggle="for-doctors" class="button">Schedule Appointment</a>
      </div>
    </div>
  </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
