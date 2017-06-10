@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<br>
	<div class="panel widget-box">
		<div class="content">
			<div class="text">
				<h1>Streamer</h1>
				<hr>

				<div class="grid margin-bottom-60 ">


					<div class="streamer" data-role="streamer" data-scroll-bar="true" data-slide-to-time="10:20" data-slide-speed="500">
						<div class="streams">
							<div class="streams-title">
								<div class="toolbar streamer-toolbar">
									<button class="toolbar-button js-show-all-streams" title="Show all streams"><span class="mif-event-available"></span></button>
									<button class="toolbar-button js-schedule-mode" title="On|Off schedule mode"><span class="mif-history"></span></button>
									<button class="toolbar-button js-go-previous-time" title="Go to previous time interval"><span class="mif-previous"></span></button>
									<button class="toolbar-button js-go-next-time" title="Go to next time interval"><span class="mif-next"></span></button>
								</div>
							</div>
							<div class="stream bg-teal">
								<div class="stream-title">INTERNET<br />BUSINESS</div>
								<div class="stream-number">room 1</div>
							</div>
							<div class="stream bg-orange">
								<div class="stream-title">ADVERTISING<br />ANALYST<br />SEO</div>
								<div class="stream-number">room 2</div>
							</div>
							<div class="stream bg-lightBlue">
								<div class="stream-title">STARTUPS<br />E-COMMERCE</div>
								<div class="stream-number">room 3</div>
							</div>
							<div class="stream bg-darkGreen">
								<div class="stream-title">MOBILE<br />GAMES<br />USABILITY</div>
								<div class="stream-number">room 4</div>
							</div>
							<div class="stream bg-pink">
								<div class="stream-title">INTERNET<br />TECHNOLOGY</div>
								<div class="stream-number">room 5</div>
							</div>
							<div class="stream bg-violet">
								<div class="stream-title">MASTERS</div>
								<div class="stream-number">room 6</div>
							</div>
						</div>

						<div class="events">
							<div class="events-area">
								<div class="events-grid">
									<div class="event-group double">
										<div class="event-super padding20">
											<div>9:00 - 9:40</div>
											<h2 class="no-margin">Registration</h2>
										</div>
									</div>
									<div class="event-group double">
										<div class="event-super padding20">
											<div>9:40 - 10:20</div>
											<h2 class="no-margin">Keynote speech</h2>

											<br />
											<img src="{{ asset('metro/images/org-01.png') }}" >
											<h4 class="no-margin">Aleksandr Olshanskiy</h4>
											<p>Imena.UA, MiroHost</p>

										</div>
									</div>

									<div class="event-group">
										<div class="event-stream" >
											<div class="event" data-role="tile">
												<div class="event-content live-slide">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/live1.jpg') }}" >
														<div class="time">10:20</div>
													</div>
													<div class="event-content-data">
														<div class="title">Katerina Kostereva</div>
														<div class="subtitle">Terrasoft</div>
														<div class="remark">Create and develop a business without external investment</div>
													</div>
												</div>
												<div class="event-content live-slide">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/live2.jpg') }}" >
														<div class="time">10:30</div>
													</div>
													<div class="event-content-data">
														<div class="title">Vlad Voskresensky</div>
														<div class="subtitle">InvisibleCRM</div>
														<div class="remark">Team Building in your startup: what to do and what not</div>
													</div>
												</div>
											</div>
											<div class="event">
												<div class="event-content">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/x.jpg') }}" >
														<div class="time">10:40</div>
													</div>
													<div class="event-content-data">
														<div class="title">Round table</div>
														<div class="remark">Trends in mobile platforms</div>
													</div>
												</div>
											</div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event double"></div>
											<div class="event double"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event double"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
											<div class="event"></div>
										</div>

										<div class="event-stream" >
											<div class="event double margin-one">
												<div class="event-content">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/x.jpg') }}" >
														<div class="time">10:40</div>
													</div>
													<div class="event-content-data">
														<div class="title">Round table</div>
														<div class="remark">Trends in mobile platforms</div>
													</div>
												</div>
											</div>
											<div class="event">
												<div class="event-content">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/me.jpg') }}" >
														<div class="time">10:20</div>
													</div>
													<div class="event-content-data">
														<div class="title">Sergey Pimenov</div>
														<div class="subtitle">Metro UI CSS</div>
														<div class="remark">Create a site with interface similar to Windows 8</div>
													</div>
												</div>
											</div>
										</div>

										<div class="event-stream" >
											<div class="event" data-role="tile" data-effect="slideDown" data-period="3000">
												<div class="event-content live-slide">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/me.jpg') }}" >
														<div class="time">10:20</div>
													</div>
													<div class="event-content-data">
														<div class="title">Sergey Pimenov</div>
														<div class="subtitle">Metro UI CSS</div>
														<div class="remark">Create a site with interface similar to Windows 8</div>
													</div>
												</div>
												<div class="event-content live-slide">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/x.jpg') }}" >
														<div class="time">10:30</div>
													</div>
													<div class="event-content-data">
														<div class="title">Round table</div>
														<div class="subtitle">Metro UI CSS</div>
														<div class="remark">Discussion</div>
													</div>
												</div>
											</div>
											<div class="event double">
												<div class="event-content">
													<div class="event-content-logo">
														<img class="icon" src="{{ asset('metro/images/x.jpg') }}" >
														<div class="time">10:40</div>
													</div>
													<div class="event-content-data">
														<div class="title">Round table</div>
														<div class="remark">Trends in mobile platforms</div>
													</div>
												</div>
											</div>
										</div>

									</div>

									<div class="event-group double" data-start="18:20">
										<div class="event-super padding20">
											<div>18:20</div>
											<h2 class="no-margin">Final ceremony</h2>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

</div>



<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
//
});

</script>

@endsection