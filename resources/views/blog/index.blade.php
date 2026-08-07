@extends('layouts.app')

@section('title', 'Blog — GreenScape Landscaping')
@section('meta_description',
    'Expert landscaping tips, garden design ideas, and outdoor living inspiration from
    GreenScape.')

@section('content')

    {{-- Blog Hero --}}
    <section style="padding: 180px 24px 80px; background: var(--color-forest); text-align: center;">
        <div class="section-label reveal" style="justify-content: center; color: var(--color-gold);">Our Blog</div>
        <h1 class="section-heading reveal reveal-delay-1 light" style="text-align: center; margin: 0 auto;">
            Landscaping Tips &<br>Garden Inspiration
        </h1>
        <p class="section-sub reveal reveal-delay-2 light" style="text-align: center; margin: 16px auto 0;">
            Expert advice on lawn care, garden design, and outdoor living from the Benchaste team.
        </p>
    </section>

    {{-- Category Filter --}}
    @if ($categories->count())
        <div style="background: var(--color-beige); padding: 24px; text-align: center;">
            <div
                style="max-width: 1280px; margin: 0 auto; display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
                <a href="{{ route('blog.index') }}" class="filter-btn {{ !request('category') ? 'active' : '' }}"
                    style="text-decoration: none;">All Posts</a>
                @foreach ($categories as $cat)
                    <a href="{{ route('blog.index', ['category' => $cat->slug]) }}" class="filter-btn"
                        style="text-decoration: none;">{{ $cat->name }}</a>
                @endforeach
            </div>
        </div>
    @endif

    {{-- Posts Grid --}}
    <section style="padding: 80px 24px; background: var(--color-white);">
        <div style="max-width: 1280px; margin: 0 auto;">

            @if ($posts->count())
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
                    @foreach ($posts as $post)
                        <a href="{{ route('blog.show', $post->slug) }}" class="reveal"
                            style="text-decoration: none; color: inherit; background: white; border-radius: var(--radius-card); border: 1px solid rgba(0,0,0,0.07); overflow: hidden; transition: var(--transition); display: block;">
                            <div
                                style="height: 220px; overflow: hidden; background: linear-gradient(135deg, var(--color-forest), var(--color-sage));">
                                @if ($post->featured_image)
                                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}"
                                        style="width: 100%; height: 100%; object-fit: cover; display: block;">
                                @endif
                            </div>
                            <div style="padding: 28px;">
                                @if ($post->category)
                                    <div
                                        style="font-family: var(--font-heading); font-size: 0.72rem; font-weight: 600; color: var(--color-gold); text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 10px;">
                                        {{ $post->category->name }}</div>
                                @endif
                                <h3
                                    style="font-family: var(--font-heading); font-size: 1.2rem; font-weight: 700; color: var(--color-charcoal); margin-bottom: 12px; line-height: 1.3;">
                                    {{ $post->title }}</h3>
                                <p
                                    style="font-family: var(--font-body); font-size: 0.9rem; color: #777; line-height: 1.6; margin-bottom: 16px;">
                                    {{ $post->excerpt }}</p>
                                <div style="font-family: var(--font-body); font-size: 0.8rem; color: #aaa;">
                                    {{ $post->published_at->format('M d, Y') }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>

                <div style="margin-top: 60px;">
                    {{ $posts->links() }}
                </div>
            @else
                <div style="text-align: center; padding: 60px 0;">
                    <p style="font-family: var(--font-body); color: #888; font-size: 1.1rem;">No blog posts yet. Check back
                        soon!</p>
                </div>
            @endif

        </div>
    </section>

@endsection
