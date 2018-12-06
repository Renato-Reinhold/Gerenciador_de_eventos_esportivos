alter table atletas ADD CONSTRAINT FK_ATLETA_CIDADE foreign key (atl_cidade) references cidades(cid_id)
on delete cascade
on update cascade;

alter table atletas drop foreign key FK_ATLETA_CIDADE;

alter table atletas add CONSTRAINT FK_ATLETA_MODALIDADE foreign key (atl_modalidade) references modalidades(mod_id)
on delete cascade
on update cascade;

alter table atletas drop foreign key FK_ATLETA_MODALIDADE;

alter table equipes add CONSTRAINT FK_EQUIPE_MODALIDADE foreign key (equ_modalidade) references modalidades(mod_id)
on delete cascade
on update cascade;

alter table equipes drop foreign key FK_EQUIPE_MODALIDADE;

alter table equipes_atletas add CONSTRAINT FK_EQUIPE_ATLETA foreign key (equ_atl_equipe) references equipes(equ_id)
on update cascade
on delete cascade;

alter table equipes_atletas drop foreign key FK_EQUIPE_ATLETA;

alter table equipes_atletas add CONSTRAINT FK_ATLETA_EQUIPE foreign key (equ_atl_atleta) references atletas(atl_id)
on update cascade
on delete cascade;

alter table equipes_atletas drop foreign key FK_ATLETA_EQUIPE;

alter table equipes_dirigentes add constraint FK_DIRIGENTE_EQUIPE foreign key (equ_dir_dirigente) references dirigentes(dir_id)
on delete cascade
on update cascade;

alter table equipes_dirigentes drop foreign key FK_DIRIGENTE_EQUIPE;

alter table evento_torneios add constraint FK_EVENTO_TORNEIO foreign key (eve_tor_evento) references eventos(eve_id)
on update cascade
on delete cascade;

alter table evento_torneios drop foreign key FK_EVENTO_TORNEIO;

alter table evento_torneios add constraint FK_TORNEIO_EVENTO foreign key (eve_tor_torneio) references torneios(tor_id)
on update cascade
on delete cascade;

alter table evento_torneios drop foreign key FK_TORNEIO_EVENTO;

