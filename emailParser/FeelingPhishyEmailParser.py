#!/usr/bin/python
import hashlib
import sys, getopt

def main(argv):
   inputfile = ''
   logfile = ''
   try:
      opts, args = getopt.getopt(argv,"hi:l:",["ifile=","lfile="])
   except getopt.GetoptError:
      print 'FeelingPhishyEmailParser.py -i <inputfile> -l <logfile>'
      sys.exit(2)
   for opt, arg in opts:
      if opt == '-h':
         print 'FeelingPhishyEmailParser.py -i <emaillistfile> -l <logfile>'
         sys.exit()
      elif opt in ("-i", "--ifile"):
         inputfile = arg
      elif opt in ("-l", "--lfile"):
         logfile = arg
   print 'Input Email file is:', inputfile
   print 'Log file is:', logfile
   
   m = hashlib.md5()
   salt = ""

   f = open(inputfile,'r')
   for l in f.readlines():
        	line = l.rstrip('\n')
                lineWithSalts = salt+line+salt
                print lineWithSalts
                hash = hashlib.md5(lineWithSalts).hexdigest()
                #print "Attempting to find email named " + line + " with hash " + hash

                ff = open(logfile,'r')
                for ll in ff.readlines():
                        csvLine = ll.split(',')
                        #print "test hash:" + csvLine[0]
                        if hash == csvLine[0]:
                		print line +","+ ll +","+ csvLine[2] + "," + csvLine[3]
                f.close()
   f.close()
if __name__ == "__main__":
   main(sys.argv[1:])
