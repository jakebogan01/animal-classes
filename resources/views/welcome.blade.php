<x-app>
    <h1 class="text-5xl uppercase font-bold mb-10 tracking-wider tracking-widest" style="font-family: 'Caveat', cursive;">Cool Animals</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-16 items-center h-[300px]">
        <a href="{{ route('animal.monkey') }}" class="block justify-self-center">
            <div class="flex justify-center items-center group w-[250px] h-[250px] rounded-xl shadow-2xl bg-white">
                <img class="w-[200px] group-hover:w-[220px] transition-[width] duration-200" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBtt5VdwnFCCDNHXDqz5KWdEOTVrSlF1Z6dw&usqp=CAU" alt="Monkey" loading="eager">
            </div>
        </a>
        <a href="{{ route('animal.fox') }}" class="block justify-self-center">
            <div class="flex justify-center items-center group w-[250px] h-[250px] rounded-xl shadow-2xl bg-white">
                <img class="w-[200px] group-hover:w-[220px] transition-[width] duration-200" src="https://svgsilh.com/svg/46419.svg" alt="Fox" loading="eager">
            </div>
        </a>
        <a href="{{ route('animal.sloth') }}" class="block justify-self-center">
            <div class="flex justify-center items-center group w-[250px] h-[250px] rounded-xl shadow-2xl bg-white">
                <img class="w-[200px] group-hover:w-[220px] transition-[width] duration-200" src="https://t3.ftcdn.net/jpg/03/89/88/04/360_F_389880443_F08GqzmwtwByoV5mS6IEhZ36EFZYKxyQ.jpg" alt="Sloth" loading="eager">
            </div>
        </a>
    </div>
</x-app>
