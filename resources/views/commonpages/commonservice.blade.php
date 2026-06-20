<div class="col-lg-4">
    <div class="sidebar-area sticky-top">
        <div class="widget widget_block widget_services">
            <h3 class="widget__heading">Our Services</h3>

            <ul class="wp-block-categories-list wp-block-categories">

                @if(request()->routeIs('products.website') ||
                    request()->routeIs('products.app') ||
                    request()->routeIs('products.web') ||
                    request()->routeIs('products.ecommerce') ||
                    request()->routeIs('products.maintenance') ||
                    request()->routeIs('products.ppc'))

                    <li><a href="{{ route('products.website') }}">Website Development</a></li>
                    <li><a href="{{ route('products.app') }}">Mobile App Development</a></li>
                    <li><a href="{{ route('products.web') }}">Web Applications</a></li>
                    <li><a href="{{ route('products.ecommerce') }}">E-Commerce Solutions</a></li>
                    <li><a href="{{ route('products.maintenance') }}">Website Maintenance</a></li>
                    <li><a href="{{ route('products.ppc') }}">PPC Marketing</a></li>

                @elseif(request()->routeIs('products.seo') ||
                         request()->routeIs('products.gbp') ||
                         request()->routeIs('products.smm') ||
                         request()->routeIs('products.ads') ||
                         request()->routeIs('products.email') ||
                         request()->routeIs('products.whatsapp') ||
                         request()->routeIs('products.sms'))

                    <li><a href="{{ route('products.seo') }}">SEO Services</a></li>
                    <li><a href="{{ route('products.gbp') }}">Google Business Profile</a></li>
                    <li><a href="{{ route('products.smm') }}">Social Media Marketing</a></li>
                    <li><a href="{{ route('products.ads') }}">Google & Meta Ads</a></li>
                    <li><a href="{{ route('products.email') }}">Email Marketing</a></li>
                    <li><a href="{{ route('products.whatsapp') }}">WhatsApp Marketing</a></li>
                    <li><a href="{{ route('products.sms') }}">Bulk SMS Services</a></li>

                @elseif(request()->routeIs('products.erp') ||
                         request()->routeIs('products.oracle') ||
                         request()->routeIs('products.crm') ||
                         request()->routeIs('products.saas') ||
                         request()->routeIs('products.cloud') ||
                         request()->routeIs('products.software'))

                    <li><a href="{{ route('products.erp') }}">iCrystal ERP Solutions</a></li>
                    <li><a href="{{ route('products.oracle') }}">Oracle ERP Solutions</a></li>
                    <li><a href="{{ route('products.crm') }}">CRM Software</a></li>
                    <li><a href="{{ route('products.saas') }}">SaaS Solutions</a></li>
                    <li><a href="{{ route('products.cloud') }}">Cloud Solutions</a></li>
                    <li><a href="{{ route('products.software') }}">Custom Software Development</a></li>

                @elseif(request()->routeIs('products.brand') ||
                         request()->routeIs('products.design') ||
                         request()->routeIs('products.poster') ||
                         request()->routeIs('products.uiux') ||
                         request()->routeIs('products.reel') ||
                         request()->routeIs('products.ai'))

                    <li><a href="{{ route('products.brand') }}">Branding Solutions</a></li>
                    <li><a href="{{ route('products.design') }}">Graphic Design</a></li>
                    <li><a href="{{ route('products.poster') }}">Poster Design</a></li>
                    <li><a href="{{ route('products.uiux') }}">UI/UX Design</a></li>
                    <li><a href="{{ route('products.reel') }}">Reels & Video Marketing</a></li>
                    <li><a href="{{ route('products.ai') }}">AI Solutions</a></li>

                @endif

            </ul>
        </div>
    </div>
</div>