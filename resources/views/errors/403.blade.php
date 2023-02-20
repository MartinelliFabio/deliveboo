@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('content')
<div class="base io"> 
  <h1 class="io">403</h1>
  <div class="text-center">
      <button><a href="{{ url('/admin') }}">Home</a></button>
      <h2>Accesso Negato</h2>
  </div>
</div>

<style>
 body {
  background-color: #332851;
}
body .base {
  width: 100%;
  /* height: 100vh; */
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  flex-direction: column;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}
body .base h1 {
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
  font-family: "Ubuntu", sans-serif;
  text-transform: uppercase;
  text-align: center;
  font-size: 20vw;
  display: block;
  margin: 0;
  color: #9ae1e2;
  position: relative;
  z-index: 0;
  animation: colors 0.4s ease-in-out forwards;
  animation-delay: 1.7s;
}
body .base h1:before {
  content: "U";
  position: absolute;
  top: -9%;
  right: 40%;
  transform: rotate(180deg);
  font-size: 10vw;
  color: #f6c667;
  z-index: -1;
  text-align: center;
  animation: lock 0.2s ease-in-out forwards;
  animation-delay: 1.5s;
}
body .base h2 {
  font-family: "Cabin", sans-serif;
  color: #9ae1e2;
  font-size: 3vw;
  margin: 0;
  text-transform: uppercase;
  text-align: center;
  animation: colors 0.4s ease-in-out forwards;
  animation-delay: 2s;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}
body .base h5 {
  font-family: "Cabin", sans-serif;
  color: #9ae1e2;
  font-size: 2vw;
  margin: 0;
  text-align: center;
  opacity: 0;
  animation: show 2s ease-in-out forwards;
  color: #ca3074;
  animation-delay: 3s;
  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}

@keyframes lock {
  50% {
    top: -4%;
  }
  100% {
    top: -6%;
  }
}
@keyframes colors {
  50% {
    transform: scale(1.1);
  }
  100% {
    color: #ca3074;
  }
}
@keyframes show {
  100% {
    opacity: 1;
  }
}

button {
    margin: 0;
    margin-bottom: 20px;
    padding: 0;
    list-style: none;
    border: 0;
    -webkit-tap-highlight-color: transparent;
    text-decoration: none;
    color: inherit;
}

button:focus {
    outline: 0;
}

button {
  height: 50px;
  padding: 0 30px;
  border-radius: 50px;
  cursor: pointer;
  box-shadow: 0px 15px 20px rgba(54, 24, 79, 0.5);
  z-index: 3;
  color: #695681;
  background-color: white;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 20px;
  transition: all 0.3s ease;
}

button:hover {
  box-shadow: 0px 10px 10px -10px rgba(54, 24, 79, 0.5);
  transform: translateY(5px);
  background: #fb8a8a;
  color: white;
}
</style>
@endsection