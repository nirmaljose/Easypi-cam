#!/usr/bin/python
import os,sys,time,subprocess,shutil

def record1hr(notify,i,filename):	
	command = 'cvlc -vvv rtsp://127.0.0.1:8554/ :demux=h264 --sout=file/ps:video/'+filename+'.mpg'
	print notify
	p = subprocess.Popen('exec '+command,shell=True)
	time.sleep(i)
	print 'done'
	p.terminate()
	stop()	

def record(i,filename):
	record1hr('started',i,filename)
	
def stop():
	print 'stopped'

def movempg(source,dest):
	if os.path.isfile(source):
		shutil.move(source,dest)

def spacecheck():#Checking OS available size
	sfvs = os.statvfs(os.getcwd()+'/video')
	avail_size = sfvs.f_frsize * sfvs.f_bavail
	available = avail_size/(1000*1000*1000) #converting bytes to GB in linux format
	return available

#time.sleep(60)	
i = 60 * 60 #sec*min*hours
stack=list()
p_files = os.listdir("video/")#paritally availabe files, coz it may be left when machie was removed from power or off'd accidentl
for p_f in p_files:#checking for local files, if it's avail - move to web server.
	movempg('video/'+p_f,'/var/www/video/')
www_files = os.listdir('/var/www/video/')#checking for avail file in web server to add in stack
for www_f in www_files:
	www_f = '/var/www/video/'+www_f
	stack.append(www_f)	
stack.sort() #sorting for old files first - easy to pop them in while loop - if condition
while True:
	filename=time.strftime('%d-%m-%Y_%H:%M')
	file_name='video/'+filename+'.mpg' #source
	file1 = '/var/www/video/'+filename+'.mpg' #destination
	if(len(stack)<25):
		record(i,filename)
		stack.append(file1)
	else:
		os.remove(stack[0])
		stack.pop(0)
		stack.append(file1)
		record(i,filename)
		sys.exit()
	movempg(file_name,file1)
	
