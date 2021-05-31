global min

min:
		load_b 0		;
		load_c_adrb 		;
		load_a 0		;
		load_b_c		;
		jmp start		;

start:
		load_c_adrb		;
		load_a_c		;
		dec_b			;
		jmpnz loop		;

loop:
		load_c_adrb		;
		cmp_c_a			;
		jmppz loop		;
		load_a_c		;
		dec_b			;
		jmpnz loop		;
