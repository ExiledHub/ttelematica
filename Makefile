#This makefile is mainly to keep the proyect clean for push.

make: clean

clean:
	@rm -f *~
	@rm -f *#
	@rm -f controllers/*~
	@rm -f controllers/*#
	@rm -f model/*~
	@rm -f model/*#
	@rm -f views/*~
	@rm -f views/*#
