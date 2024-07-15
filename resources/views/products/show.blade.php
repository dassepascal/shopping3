<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fiche Produit') }}
        </h2>
    </x-slot>


      <div class="py-12 px-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/2 px-4 mb-8">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}"
                        class="w-full rounded-lg shadow-lg tambour-image" width="600" height="400">

                </div>
                <div class="w-full md:w-1/2 px-4">
                    <h1 class="text-4xl font-bold mb-4">{{ $product->name }}</h1>
                    <p class="text-xl text-spirit font-bold mb-4">{{ $product->formatted_price }}</p>
                    <p class="text-gray-700 mb-6">{{ $product->description }}</p>
                    <ul class="list-disc list-inside mb-6 text-gray-700">
                        <li>Diamètre : 40 cm</li>
                        <li>Cadre en cèdre rouge, bois sacré des Amérindiens</li>
                        <li>Peau de bison éthiquement sourcée</li>
                        <li>Peint à la main avec des pigments naturels</li>
                        <li>Orné de véritables plumes d'aigle (obtenues légalement)</li>
                        <li>Incluant une baguette en bois de cèdre et un sac de transport en cuir</li>
                    </ul>
                    @if (Route::has('login'))
                    @auth

                    <add-to-cart :product-id="{{ $product->id }}"></add-to-cart>
                    @endauth
                    @endif
                    <div class="bg-gray-200 rounded-lg p-4 mt-4">
                        <h3 class="font-bold mb-2">Livraison</h3>
                        <p>Livraison gratuite en France métropolitaine. Expédition sous 3-5 jours ouvrés.</p>
                    </div>
                </div>
            </div>

            <section class="mt-16">
                <h2 class="text-3xl font-bold mb-8">L'Essence du Tambour de l'Aigle</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">Symbolisme de l'Aigle</h3>
                        <p class="text-gray-700 mb-4">Dans de nombreuses traditions chamaniques, l'aigle est considéré
                            comme un messager entre le monde terrestre et le monde spirituel. Il représente la vision
                            claire, la liberté, le courage et la connexion avec le divin. En utilisant ce tambour, vous
                            invoquez la sagesse de l'aigle pour élargir votre perspective et accéder à des états de
                            conscience plus élevés.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4">Fabrication Sacrée</h3>
                        <p class="text-gray-700 mb-4">Chaque Tambour de l'Aigle est créé dans un esprit de révérence et
                            de connexion spirituelle. Nos artisans travaillent en harmonie avec les énergies de l'aigle,
                            infusant chaque étape du processus de création avec des intentions de sagesse et de vision
                            élevée. Le cèdre rouge utilisé pour le cadre est considéré comme un bois sacré, renforçant
                            les propriétés spirituelles du tambour.</p>
                    </div>
                </div>
            </section>

            <section class="mt-16">
                <h2 class="text-3xl font-bold mb-8">Comment utiliser votre Tambour de l'Aigle</h2>
                <ol class="list-decimal list-inside text-gray-700 space-y-4">
                    <li>Trouvez un espace calme et élevé, si possible en plein air ou près d'une fenêtre.</li>
                    <li>Tenez le tambour face à vous et fermez les yeux. Visualisez un aigle majestueux planant
                        au-dessus de vous.</li>
                    <li>Commencez à battre doucement le tambour, en imaginant que chaque battement vous élève plus haut
                        dans le ciel.</li>
                    <li>Augmentez progressivement le rythme, en vous concentrant sur l'expansion de votre conscience.
                    </li>
                    <li>Visualisez le monde vu d'en haut, notez les détails et les connexions que vous n'aviez jamais
                        remarqués auparavant.</li>
                    <li>Posez une question ou définissez une intention, puis laissez la sagesse de l'aigle vous guider
                        vers la réponse.</li>
                    <li>Terminez en ralentissant progressivement le rythme, en remerciant l'esprit de l'aigle pour sa
                        guidance.</li>
                </ol>
            </section>
        </div>
    </div>
</x-app-layout>
