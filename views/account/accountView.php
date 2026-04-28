<?php
include_once TAGEMBED_PLUGIN_DIR_PATH . 'views/includes/headView.php';
wp_enqueue_script('__script-account-js', TAGEMBED_PLUGIN_URL . '/assets/js/account/tagembed.account.script.js', ['jquery'], TAGEMBED_PLUGIN_VERSION, true);
$__tagembed__logo_light_url = TAGEMBED_PLUGIN_URL . '/assets/images/logo-light.svg';
$__tagembed__logo_url = TAGEMBED_PLUGIN_URL . '/assets/images/logo.svg';
?>
<!--Start-- Other Plugin Popup-->
<style>
	.__tagembed__okaybtn:hover {
		color: #fff !important;
	}

	#__tagembed__account_tab_view li:has(a.active) {
		display: none;
	}
</style>
<div id="__tagembed__other_plugin_popup" class="__tagembed__other_plugin_popup"></div>
<!--End-- Other Plugin Popup-->

<div class="_te_w-full _te_overflow-hidden _te_bg-white _te_text-slate-900">
	<div class="_te_grid _te_grid-cols-1 lg:_te_grid-cols-[0.88fr_1fr]">
		<section class="_te_min-h-[calc(100vh-32px)] _te_relative _te_hidden _te_overflow-hidden _te_bg-[#1f2633] _te_text-white lg:_te_block _te_py-12">
			<div class="_te_pointer-events-none _te_absolute _te_inset-0 _te_opacity-45 _te_bg-no-repeat _te_bg-center _te_bg-cover" style="background-image: url('<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/bg-pattern.svg'); ?>');"></div>

			<div class="_te_relative _te_z-10 _te_mx-auto _te_flex _te_h-full _te_max-w-96 _te_flex-col">
				<div class="_te_text-center">
					<img src="<?php echo esc_url($__tagembed__logo_light_url); ?>" alt="Tagembed" hight="40" width="130" class="_te_mx-auto _te_w-auto">
					<p class="_te_mt-12 _te_text-lg _te_font-medium _te_text-slate-200">Why bussiness choose Tagembed?</p>
				</div>

				<div class="_te_mx-auto _te_grid _te_w-full _te_grid-cols-3 _te_items-center _te_gap-x-10 _te_gap-y-8 _te_text-center _te_text-slate-400">
					
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/salisbury.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/american-express.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/sony.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/yale.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/yamaha.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
					<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/svg/hewlett-packard.svg'); ?>" alt="Tagembed" hight="60" width="120" class="_te_mx-auto _te_w-auto">
				</div>

				<div class="_te_mt-auto _te_flex _te_flex-col _te_gap-3">
						<p class="_te_text-lg _te_font-medium _te_text-slate-200 _te_mb-2 _te_mt-0">“Made it easy to embed social media posts onto our website with a nice UX on the backend! Chat support has been quick and very helpful.</p>
						<div class="_te_flex _te_items-center _te_justify-between _te_gap-8">
							<div class="_te_text-slate-200">
								<p class="_te_text-xl _te_font-medium _te_mb-2 _te_mt-0">-Devon H.</p>
								<p class="_te_text-sm _te_font-medium _te_mb-0 _te_mt-0">Digital Marketing Specialist</p>
							</div>
							<div class="_te_flex _te_size-36 _te_items-end _te_justify-center">
								<img src="<?php echo esc_url(TAGEMBED_PLUGIN_URL . '/assets/images/Devon-H.png'); ?>" alt="Tagembed" hight="190" width="190" class="_te_mx-auto _te_w-auto">
							</div>
						</div>
				</div>
			</div>
		</section>

		<section class="_te_flex _te_items-center _te_justify-center _te_bg-white _te_px-5 _te_py-10 sm:_te_px-8">
			<div class="_te_w-full _te_max-w-[430px]">
				<div id="__tagembed__account_error" class="_te_mb-6 _te_hidden _te_rounded-md _te_border _te_border-red-200 _te_border-l-4 _te_border-l-red-500 _te_bg-red-50 _te_p-4 _te_text-sm _te_font-medium _te_text-red-700">Unknown email. Check again or try your email address.</div>

				<div id="__tagembed__account_login_view">
					<div class="_te_text-left">
						<div class="_te_mb-8 _te_flex _te_items-center _te_gap-3 lg:_te_hidden ">
							<img src="<?php echo esc_url($__tagembed__logo_url); ?>" alt="Tagembed" hight="40" width="130" class="_te_w-auto">
						</div>
						<h1 class="_te_text-3xl _te_font-bold _te_tracking-normal _te_text-slate-900">Login</h1>
						<p class="_te_mt-3 _te_text-sm _te_font-medium _te_text-slate-600">Enter your email and password</p>
					</div>

					<form action="javascript:void(0);" id="__tagembed__login_form" class="_te_mt-7 _te_space-y-4">
						<div class="_te_space-y-2">
							<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__login_email_id">Email</label>
							<input id="__tagembed__login_email_id" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="email" name="emailId" value="" placeholder="Your email address" required autofocus>
							<span id="__tagembed__login_email_id_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
						</div>
						<div class="_te_space-y-2">
							<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__login_password">Password</label>
							<div class="_te_relative">
								<input id="__tagembed__login_password" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_pr-12 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="password" name="password" value="" placeholder="Enter 8 or more characters" required>
								<span class="_te_pointer-events-none _te_absolute _te_right-4 _te_top-[12px] _te_text-slate-500">
									<svg class="_te_h-6 _te_w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
										<path d="M3 3l18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
										<path d="M10.6 10.6A2 2 0 0012 14a2 2 0 001.4-3.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
										<path d="M9.8 5.2A10.6 10.6 0 0112 5c5 0 8.3 4.2 9.2 5.6a2.3 2.3 0 010 2.8c-.4.6-1.2 1.6-2.3 2.6M6.4 6.8a14 14 0 00-3.6 3.8 2.3 2.3 0 000 2.8C3.7 14.8 7 19 12 19c1.2 0 2.3-.2 3.3-.6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</div>
							<span id="__tagembed__login_password_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
						</div>
						<div class="_te_flex _te_items-center _te_justify-end">
							<a class="_te_text-sm _te_font-semibold _te_text-blue-600 hover:_te_text-blue-700" href="https://app.tagembed.com/accounts/forgotpassword/" target="_blank">Forgot Password?</a>
						</div>
						<button type="submit" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border-0 _te_bg-[#1973f9] _te_text-base _te_font-bold _te_text-white _te_shadow-sm _te_transition hover:_te_bg-[#0f63df] focus:_te_outline-none focus:_te_ring-4 focus:_te_ring-blue-100">Login</button>
					</form>
				</div>

				<div id="__tagembed__account_register_view" class="_te_hidden">
					<div class="_te_text-left">
						<div class="_te_mb-8 _te_flex _te_items-center _te_gap-3 lg:_te_hidden ">
							<img src="<?php echo esc_url($__tagembed__logo_url); ?>" alt="Tagembed" hight="40" width="130" class="_te_w-auto">
						</div>
						<h1 class="_te_text-3xl _te_font-bold _te_tracking-normal _te_text-slate-900">Create Account</h1>
						<p class="_te_mt-3 _te_text-sm _te_font-medium _te_text-slate-600">Enter your details to create your account</p>
					</div>

					<form action="javascript:void(0);" id="__tagembed__register_form" class="_te_mt-7 _te_space-y-4">
						<div class="_te_space-y-2">
							<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__register_full_name">Full Name</label>
							<input id="__tagembed__register_full_name" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="text" name="fullName" value="" placeholder="Your first name and last name" required>
							<span id="__tagembed__register_full_name_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
						</div>
						<div class="_te_space-y-2">
							<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__register_email_id">Email</label>
							<input id="__tagembed__register_email_id" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="email" name="emailId" value="" placeholder="Your email address" required>
							<span id="__tagembed__register_email_id_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
						</div>
						<div class="_te_grid _te_grid-cols-1 _te_gap-5 sm:_te_grid-cols-[1fr_1.15fr]">
							<div class="_te_space-y-2">
								<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__callingCode">Country</label>
								<select id="__tagembed__callingCode" name="calling_code" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-3 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100"></select>
								<span id="__tagembed__register_calling_code_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
							</div>
							<div class="_te_space-y-2">
								<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__register_contact_no">Contact Number</label>
								<input id="__tagembed__register_contact_no" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="number" name="contact_no" value="" placeholder="Contact Number">
								<span id="__tagembed__register_contact_no_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
							</div>
						</div>
						<div class="_te_space-y-2">
							<label class="_te_block _te_text-sm _te_font-semibold _te_text-slate-900" for="__tagembed__register_password">Password</label>
							<div class="_te_relative">
								<input id="__tagembed__register_password" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border _te_border-slate-300 _te_bg-white _te_px-4 _te_pr-12 _te_text-sm _te_text-slate-800 _te_shadow-sm _te_outline-none _te_transition focus:_te_border-blue-500 focus:_te_ring-2 focus:_te_ring-blue-100" type="password" name="password" value="" placeholder="Enter 8 or more characters" required>
								<span class="_te_pointer-events-none _te_absolute _te_right-4 _te_top-[12px] _te_text-slate-500">
									<svg class="_te_h-6 _te_w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
										<path d="M3 3l18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
										<path d="M10.6 10.6A2 2 0 0012 14a2 2 0 001.4-3.4" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
										<path d="M9.8 5.2A10.6 10.6 0 0112 5c5 0 8.3 4.2 9.2 5.6a2.3 2.3 0 010 2.8c-.4.6-1.2 1.6-2.3 2.6M6.4 6.8a14 14 0 00-3.6 3.8 2.3 2.3 0 000 2.8C3.7 14.8 7 19 12 19c1.2 0 2.3-.2 3.3-.6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</span>
							</div>
							<span id="__tagembed__register_password_error" class="_te_hidden _te_text-sm _te_font-medium _te_text-red-600"></span>
						</div>
						<button type="submit" class="_te_h-[48px] _te_w-full _te_rounded-md _te_border-0 _te_bg-[#1973f9] _te_text-base _te_font-bold _te_text-white _te_shadow-sm _te_transition hover:_te_bg-[#0f63df] focus:_te_outline-none focus:_te_ring-4 focus:_te_ring-blue-100">Create Account</button>
					</form>
				</div>

				<div id="__tagembed__account_tab_view" class="_te_mt-7 _te_text-center">
					<ul class="_te_m-0 _te_list-none _te_p-0">
						<li class="_te_m-0 _te_inline">
							<span class="_te_text-sm _te_font-medium _te_text-slate-600">Already have an account?</span>
							<a id="__tagembed__account_login" onclick="__tagembed__manage_account_view('login')" href="javascript:void(0);" class="active _te_ml-1 _te_text-sm _te_font-bold _te_text-blue-600 hover:_te_text-blue-700">Login</a>
						</li>
						<li class="_te_m-0 _te_inline">
							<span class="_te_text-sm _te_font-medium _te_text-slate-600">Don&rsquo;t have an account?</span>
							<a id="__tagembed__account_register" onclick="__tagembed__manage_account_view('register')" href="javascript:void(0);" class="_te_ml-1 _te_text-sm _te_font-bold _te_text-blue-600 hover:_te_text-blue-700">Sign Up</a>
						</li>
					</ul>
				</div>

				<p class="_te_mx-auto _te_mt-7 _te_max-w-[390px] _te_text-center _te_text-sm _te_leading-6 _te_text-slate-600">By clicking Create Account, you agree to our <a href="https://tagembed.com/terms-of-service/" target="_blank" class="_te_text-slate-700 _te_underline">Terms of Service</a> and <a href="https://tagembed.com/privacy-policy/" target="_blank" class="_te_text-slate-700 _te_underline">Privacy Policy</a></p>
			</div>
		</section>
	</div>
</div>
<?php include_once TAGEMBED_PLUGIN_DIR_PATH . 'views/includes/footerView.php'; ?>
