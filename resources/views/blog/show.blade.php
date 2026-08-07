@extends('layouts.app')

@section('title', ($post->meta_title ?: $post->title) . ' — BenChaste Blog')
@section('meta_description', $post->meta_description ?: $post->excerpt)

@section('content')

    {{-- Post Hero --}}
    <section style="padding: 160px 24px 60px; background: var(--color-forest);">
        <div style="max-width: 800px; margin: 0 auto; text-align: center;">
            @if ($post->category)
                <div class="section-label reveal" style="justify-content: center; color: var(--color-gold);">
                    {{ $post->category->name }}</div>
            @endif
            <h1 class="reveal reveal-delay-1"
                style="font-family: var(--font-heading); font-size: clamp(1.8rem, 4vw, 2.8rem); font-weight: 800; color: white; line-height: 1.2; margin-bottom: 20px;">
                {{ $post->title }}
            </h1>
            <p style="font-family: var(--font-body); font-size: 0.9rem; color: rgba(255,255,255,0.6);">
                Published {{ $post->published_at->format('F d, Y') }}
            </p>
        </div>
    </section>

    {{-- Featured Image --}}
    @if ($post->featured_image)
        <div style="max-width: 1000px; margin: -40px auto 0; padding: 0 24px; position: relative; z-index: 2;">
            <div
                style="border-radius: 16px; overflow: hidden; box-shadow: 0 24px 64px rgba(0,0,0,0.15); aspect-ratio: 16/9;">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                    style="width: 100%; height: 100%; object-fit: cover; display: block;">
            </div>
        </div>
    @endif

    {{-- Post Content --}}
    <section style="padding: 80px 24px;">
        <div style="max-width: 720px; margin: 0 auto;">

            <div class="blog-content"
                style="font-family: var(--font-body); font-size: 1.05rem; line-height: 1.9; color: #333;">
                {!! $post->content !!}
            </div>

            {{-- Back to website CTA --}}
            <div
                style="margin-top: 60px; padding: 32px; background: var(--color-beige); border-radius: 16px; text-align: center;">
                <h3
                    style="font-family: var(--font-heading); font-size: 1.3rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 12px;">
                    Ready to Transform Your Outdoor Space?</h3>
                <p style="font-family: var(--font-body); color: #777; margin-bottom: 24px;">Get a free consultation with our
                    landscaping experts today.</p>
                <a href="{{ route('home') }}#contact" class="btn-primary">Get Free Quote</a>
            </div>

        </div>
    </section>

    {{-- Related Posts --}}
    @if ($relatedPosts->count())
        <section style="padding: 60px 24px 100px; background: var(--color-beige);">
            <div style="max-width: 1000px; margin: 0 auto;">
                <h3
                    style="font-family: var(--font-heading); font-size: 1.5rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 32px; text-align: center;">
                    Related Articles</h3>
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
                    @foreach ($relatedPosts as $related)
                        <a href="{{ route('blog.show', $related->slug) }}"
                            style="text-decoration: none; color: inherit; background: white; border-radius: 12px; overflow: hidden; box-shadow: var(--shadow-card); display: block;">
                            <div
                                style="height: 140px; background: linear-gradient(135deg, var(--color-forest), var(--color-sage));">
                                @if ($related->featured_image)
                                    <img src="{{ asset('storage/' . $related->featured_image) }}"
                                        alt="{{ $related->title }}" style="width: 100%; height: 100%; object-fit: cover;">
                                @endif
                            </div>
                            <div style="padding: 18px;">
                                <h4
                                    style="font-family: var(--font-heading); font-size: 0.95rem; font-weight: 700; color: var(--color-charcoal); line-height: 1.4;">
                                    {{ $related->title }}</h4>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection
