#!/usr/bin/env ruby

desc "Watch SASS and compile"
task :watch do
  compassPid = Process.spawn('compass watch -e development')  
  
  trap("INT") {
    Process.kill(9, compassPid) rescue Errno::ESRCH
    exit 0
  }
  Process.wait(compassPid)
end

desc "Compile SASS to CSS"
task :css do
  system 'compass compile -e production'
end

desc "Minify CSS Output"
task :minify => [:css] do
  system 'sass style.css:style.min.css --style compressed --scss'
end

desc "Deploy"
task :deploy => [:css, :minify] do
  system 'deploy.sh'
end

task :default => [:watch]
