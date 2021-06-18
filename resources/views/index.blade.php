@extends('layouts.master-layout')

@push('css')
    
@endpush

@section('content')

<main class="main-content">
	
		     	<div class="col-md-8">			
								<img id="backgrounder" src="images/backgrounder.jpg" alt="background">
							</div>
							
						    <div class="col-md-4">
					
								<h1 class="hero-title" style="font-size:43px; text-align: center;">Justice In Words</h1>
								<p class="redtext" style="font-size:23px; color: white; text-align: center;">In Benedicto Law,</p>
								<p class="redtext" style="font-size:23px; color: white; text-align: center;">Justice is What We Create Everyday. </p>
								<p class="redtext" style="font-size:23px; color: white; text-align: center;">With Deeper Understanding,</p>
								<p class="redtext" style="font-size:23px; color: white; text-align: center;">Get Better Solutions.</p>
								<p class="redtext" style="font-size:20px; color: white; text-align: center;">Sign up today, It's Free!</p>
								<div id="try">
								<a href="{{route('login.login')}}" class="button">Sign-up</a>


								


								</div>		
						    </div>
						</div>
				<!-- .hero-slider -->
				<div class="fullwidthblock" data-bg-color="#111113">
					<div class="container">
						
						<div class="rows">
							<div class="cole">
							<h2 style="font-size:50px; text-align: center;">About The Benedicto Law</h2>
								
							</div>
							
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row feature-list-section">
							<div class="col-md-4">
								<div class="feature">
									<header>
									
										<div class="feature-title-copy">
											<h2 class="feature-title">How Can Attorneys Help You?</h2>
											<small class="feature-subtitle"></small>
										</div>
									</header>
									<p>The law is part of your daily life and lawyers are trained to guide you through the legal process. A lawyer can help you buy a home, write a will, or sell a business.</p>
								
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<header>
										
										<div class="feature-title-copy">
											<h2 class="feature-title">Reasons to Hire a Lawyer?</h2>
											<small class="feature-subtitle"></small>
										</div>
									</header>
									<p>The law is complicated and not everyone knows the law the lawyers can. They know how to properly place the evidence and file your documents. Finally, not having a lawyer can cost you more money.</p>
							
								</div>
							</div>
							<div class="col-md-4">
								<div class="feature">
									<header>
										
										<div class="feature-title-copy">
											<h2 class="feature-title">Where Are We?</h2>
											<small class="feature-subtitle"></small>
										</div>
									</header>
									<p>Units D & F, Third Floor, LMB Building 158 San Antonio Avenue, Paranaque City.</p>
							
								</div>
							</div>
						</div>
				
						
						
					</div>
				</div>

            </main> <!-- .main-content -->

@endsection

@push('script')
    
@endpush