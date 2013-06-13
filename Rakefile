#!/usr/bin/env ruby

desc "Clean theme folder"
task :clean do
  puts "Removes old minification "
  system 'rm style.min.css 2>/dev/null'
end

desc "Watch SASS and compile"
task :watch => [:clean] do
  compassPid = Process.spawn('compass watch -e development')  
  
  trap("INT") {
    Process.kill(9, compassPid) rescue Errno::ESRCH
    exit 0
  }
  Process.wait(compassPid)
end

desc "Compile SASS to CSS"
task :css => [:clean] do
  puts "Compiling SASS ..."
  system 'compass compile -e production'
end

desc "Minify CSS Output"
task :minify => [:css] do
  puts "Minifying CSS ..."
  system 'sass style.css:style.min.css --style compressed --scss'
end

desc "Deploy"
task :deploy => [:clean, :css, :minify] do
  puts "Deploying ..."
  system 'bash deploy.sh'
end

task :default => [:watch]
