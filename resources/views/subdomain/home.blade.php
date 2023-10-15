<x-guest-layout>


    welcome to subdomain of {{ $user->name }} <br> <a href="{{ route('subdomainabout',$user) }}" class="text-primary">About</a>
</x-guest-layout>
